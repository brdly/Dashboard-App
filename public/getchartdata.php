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

$dbh = DatabaseHelper::databaseConnection();

$dataArray = array(
    "app_name" => "Admin Panel",
    "platforms" => array(),
    "form_fields" => array()
);

$platforms = DatabaseHelper::getPlatforms($dbh);

foreach ($platforms as $platform)
{
    array_push($dataArray["platforms"], $platform["name"]);
}

$formFields = DatabaseHelper::getFormFields($dbh);

foreach ($formFields as $formField)
{
    array_push($dataArray["form_fields"], ucwords(str_replace("_", " ", $formField["name"])));
}

foreach ($platforms as $platform)
{
    $platformID = (int)DatabaseHelper::findPlatformID($dbh, $platform["name"])[0]["id"];

    $formData = DatabaseHelper::getFormDataFromPlatform($dbh, $platformID);

    $platformArray = array();

    $reviewIDs = DatabaseHelper::getUniqueReviewIDsFromPlatform($dbh, $platformID);

    foreach ($reviewIDs as $reviewID)
    {
        if ($reviewID["idReview"] != null)
        {
            $review = DatabaseHelper::getReviewFromReviewID($dbh, (int)$reviewID["idReview"]);

            $reviewArray = array();

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

            $platformArray[$reviewID["idReview"]] = $reviewArray;
        }
    }
    $dataArray[$platform["name"]] = $platformArray;
}

echo json_encode($dataArray);