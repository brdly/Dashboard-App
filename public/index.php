<?php
/**
 * Created by PhpStorm.
 * User: georgebroadley
 * Date: 11/01/2018
 * Time: 16:22
 */

require_once "../src/DatabaseHelper.php";
require_once "../config.php";

use SPATApp\App\DatabaseHelper;
use SPATApp\Config;

echo "Hello World!";

var_dump(DatabaseHelper::getFormDataFromField(2, 10));