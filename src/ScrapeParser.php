<?php
/**
 * Created by PhpStorm.
 * User: Mikus
 * Date: 11/01/2018
 * Time: 12:17
 */

namespace SPATApp\App;

$ROOT = $_SERVER['DOCUMENT_ROOT'];
require_once $ROOT . "/src/DatabaseHelper.php";
require_once $ROOT . "/config.php";

use SPATApp\App\DatabaseHelper;
use SPATApp\Config;

//\SPATApp\App\DatabaseHelper::edit(null,null,null);

//echo "Field order:<br/>";
//echo "Overall Rating out of 5 //<br/>";
//echo "Job Work/Life Balance out of 100 //<br/>";
//echo "Compensation/Benefits out of 100 //<br/>";
//echo "Job Security/Advancement out of 100 //<br/>";
//echo "Management out of 100 //<br/>";
//echo "Job Culture out of 100 //<br/>";
//echo "Gibberish //<br/>";
//echo "Current or Former Employee //<br/>";
//echo "Location //<br/>";
//echo "Date //<br/>";
//echo "Review text //<br/>";
//echo "Pros //<br/>";
//echo "Cons //<br/>";

class ScrapeEntry extends \ArrayObject{
    public function  __construct(){}
}


class ScrapeParser
{

    public $FIELDS = array(
        "rating",
        "worklife_balance",
        "benefits",
        "job_security",
        "management",
        "culture",
        "former_employee",
        "location",
        "date",
        "review",
        "pros",
        "cons"
    );
    public function  __construct(){

    }
    public function uploadFile($filename){

    }

    public function createEntry($company,$country){
        $active_entry = new ScrapeEntry();
        $active_entry["company"] = $company;
        $active_entry["country"] = $country;
        return $active_entry;
    }
    //note for txt: name is the platform.
    public function translate($data,$company,$country)
    {
        $dump = explode("//",$data);
        $index = 0;
        //entry no 8 is gibberish!!
        $active_entry = ScrapeParser::createEntry($company,$country);
        $all_data = array();
        array_push($all_data,$active_entry);

        foreach ($dump as $entry ){

            if ($entry == " "){
                $active_entry = ScrapeParser::createEntry($company,$country);;
                array_push($all_data,$active_entry);
                $index = 0;
            }else
            {

                $nindex = $index;
                if ($index > 6) {
                    $nindex = $index - 1;
                }
                $entry_name = $this->FIELDS[$nindex];

                $active_entry[$entry_name] = $entry;
                $index = $index + 1;
            }

        }
        return $all_data;
    }

    public function read_file($filename){
        $char_array = str_split($filename);
        $offset_array = array(0);
        $country_char = array(0);

//        for ($i=sizeof($char_array); $i > 0; $i = $i - 1){
//            $char = $char_array[$i];
//            if (is_numeric($char)){
//                //TODO
//            }
//            $country_char[2 - sizeof()]
//
//        }
        $len = strlen($filename);
        $country = substr($filename,$len-6,2);
        $section_len = ($len-6) - 5;
        $company = substr($filename,5,$section_len);
        $company = str_replace("-", " ", $company);

        $file = fopen($filename,"r");
        $data = stream_get_contents($file);
        //echo $country;
        //echo $company;
        return ScrapeParser::translate($data,$company,$country);
    }

    public function printEntry($data_array){
        $datan = $data_array[2];
        foreach ($this->FIELDS as $field_name){
            echo $field_name." ";
            echo $datan[$field_name];
            echo "</br>";
        }
    }
    public function upload_data($data_array){

        $database = DatabaseHelper::databaseConnection();
        foreach ($data_array as $data){

            $company = $data["company"];
            $country = $data["country"];
            echo "company: ".$company;
            $platform_index = DatabaseHelper::findPlatformID($database,$company);
            if (sizeof($platform_index) == 0) {
                DatabaseHelper::addPlatform($database, $company);
                echo "added platform " . $company;
                $platform_index = DatabaseHelper::findPlatformID($database,$company);
            }
            $platform_index_real = $platform_index[0];
            if (gettype($platform_index_real) == "array"){
                $platform_index_real = $platform_index_real["id"];
            }

            $index=null;
            foreach ($this->FIELDS as $field_name){
                echo "field name".$field_name;
                echo "</br>";
                $field_index = DatabaseHelper::findFieldID($database,$field_name);
                if (sizeof($field_index) == 0){
                    $database = DatabaseHelper::databaseConnection();
                    DatabaseHelper::addField($database,$field_name);
                    echo "added field :".$field_name;
                    $field_index = DatabaseHelper::findFieldID($database,$field_name);
                    echo "</br>";
                    var_dump($field_index);
                }
                echo "</br>";
                $target = $data[$field_name];
                if ($target != null){
                    $field_index_real = $field_index[0];
                    if (gettype($field_index_real) == "array"){
                        $field_index_real = $field_index_real["id"];
                    }

                    //debug

                    echo "</br>";
                    echo "field index".$field_index_real;
                    echo "</br>";
                    echo "plat_index ".$platform_index_real;
                    echo "</br>";
                    echo "target".$target;
                    echo "</br>";
                    echo "index".$index;
                    echo "</br>";
                    echo "exec";
                    echo "</br>";
                    //
                    //addData($dbh, $formFieldID, $platformID, $reviewID, $dataItem)
                    $result = DatabaseHelper::addData($database,$field_index_real,$platform_index_real,$index,$target);

                    if ($index == null){$index = DatabaseHelper::getNextUniqueIndex($database,"FormData")-1;};

                    if (!$result){
                        die("failed to upload data!");
                    }
                }
            }

        }

    }
    public function  download_data(){


    }


}


//push id
//upload it
//pop


