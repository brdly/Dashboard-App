<?php
/**
 * Created by PhpStorm.
 * User: Mikus
 * Date: 15/01/2018
 * Time: 15:02
 */
namespace SPATApp\App;
$ROOT = $_SERVER['DOCUMENT_ROOT'];
require_once $ROOT . "/src/ScrapeParser.php";
use SPATApp\App\ScrapeParser;

$data = array();
foreach($_POST as $key => $value) {
    $data[$key] = $value;

}
//public $FIELDS = array(
//    "rating",
//    "worklife_balance",
//    "benefits",
//    "job_security",
//    "management",
//    "culture",
//    "former_employee",
//    "location",
//    "date",
//    "review",
//    "pros",
//    "cons"
//);
$data["company"] = $data["platform"];
$data["date"] = time();
$parser = new ScrapeParser();
$parser->upload_data(array($data));

echo "<p>Thank you for your submission!</p>";