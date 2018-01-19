
<?php

require_once __DIR__ . "/src/ScrapeParser.php";
/**
 * Created by PhpStorm.
 * User: Mikus
 * Date: 11/01/2018
 * Time: 12:28
 */

$parser = new \SPATApp\App\ScrapeParser();
$data = $parser->read_file("data/Amazon-Mechanical-TurkUS.txt");
//$parser->printEntry($data);
//$data = $parser->read_file("raw_data.txt");
$parser->upload_data($data);

