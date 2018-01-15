<?php
/**
 * Created by PhpStorm.
 * User: georgebroadley
 * Date: 12/01/2018
 * Time: 16:38
 */

$ROOT = $_SERVER['DOCUMENT_ROOT'];
require_once $ROOT . "/../src/DatabaseHelper.php";
require_once $ROOT . "/../config.php";

use SPATApp\App\DatabaseHelper;
use SPATApp\Config;

// Create a DB connection and initialise the array.

$dbh = DatabaseHelper::databaseConnection();

$dataArray = array(
    "app_name" => "Admin Panel",
    "platforms" => array(),
    "form_fields" => array()
);

// Get platforms from the DB, loop through them and push to Array

$platforms = DatabaseHelper::getPlatforms($dbh);

foreach ($platforms as $platform)
{
    array_push($dataArray["platforms"], $platform["name"]);
}

// Get form fields from the DB, loop through them and push to Array

$formFields = DatabaseHelper::getFormFields($dbh);

foreach ($formFields as $formField)
{
    array_push($dataArray["form_fields"], ucwords(str_replace("_", " ", $formField["name"])));
}

// Loop through each platform, get the name of the platform and get the review IDs for that platform.

foreach ($platforms as $platform)
{
    $platformID = (int)DatabaseHelper::findPlatformID($dbh, $platform["name"])[0]["id"];

    $formData = DatabaseHelper::getFormDataFromPlatform($dbh, $platformID);

    $platformArray = array();

    $reviewIDs = DatabaseHelper::getUniqueReviewIDsFromPlatform($dbh, $platformID);

    // Loop through each review ID and get the review from the ID

    foreach ($reviewIDs as $reviewID)
    {
        $reviewArray = array();

        if ($reviewID["idReview"] != null)
        {
            $review = DatabaseHelper::getReviewFromReviewID($dbh, (int)$reviewID["idReview"]);

            // Loop though each item in the review and explode the pros and cons to turn them into an array and push the
            // review elements to the array.

            for ($i = 0; $i < count($review); $i++)
            {
                if ($dataArray["form_fields"][$review[$i]["idFormField"]-1] == "Pros" ||
                    $dataArray["form_fields"][$review[$i]["idFormField"]-1] == "Cons")
                {
                    $dataToAdd = explode(", ", $review[$i]["name"]);
                } else {
                    $dataToAdd = $review[$i]["name"];
                }

                $reviewArray[$dataArray["form_fields"][$review[$i]["idFormField"]-1]] = $dataToAdd;
            }

            // Push the completed review to the platform array

            $platformArray[$reviewID["idReview"]] = $reviewArray;
        }
    }

    // Push the platform array with each review to the main array.

    $dataArray[$platform["name"]] = $platformArray;
}

echo json_encode($dataArray);