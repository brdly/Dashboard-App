<?php
namespace SPATApp\App;
$ROOT = $_SERVER['DOCUMENT_ROOT'];
require_once $ROOT . "/src/ScrapeParser.php";
use SPATApp\App\ScrapeParser;
$data = array();
foreach($_POST as $key => $value) {
    $data[$key] = $value;
}
if (session_status() == PHP_SESSION_NONE) {
    session_start();
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
$GOAL_LOCATION = "/public/index.php";
$data["date"] = time();
$parser = new ScrapeParser();


$vital_ind = 1;
function break_exec(){
    global $GOAL_LOCATION;
    echo $_SESSION["error"];
    echo $_SESSION["error_msg"];
    echo  $_SESSION["warning"];
    header("Location: ".$GOAL_LOCATION);
    die("data input wrong");
}
var_dump($data);
foreach ($parser->VITAL_FIELDS as $field_name){
    echo $field_name;
    echo $data[$field_name];
    if (!$data[$field_name]){
        $_SESSION["error"] = $vital_ind;
        $_SESSION["error_msg"] = "Vital field missing: ".$field_name;
        break_exec();
    }
    $vital_ind = $vital_ind + 1;
}
foreach ($parser->FIELDS as $field_name){
    if (!isset($data,$field_name)){
        echo $field_name;
        $_SESSION["warning"] = "Optional field missing: ".$field_name;
    }

}
$err = $parser->upload_data(array($data));
if ($err != 0){
    $_SESSION["error"] = -1;
    $_SESSION["error_msg"] = "Internal server error";
}else{
    $_SESSION["error"] = 0;
    $_SESSION["error_msg"] = "Thank you for your submission!";
}
echo "session finished";
echo "</br>";
echo $_SESSION["error"];
echo $_SESSION["error_msg"];
header("Location: ".$GOAL_LOCATION);
