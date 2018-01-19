<?php
/**
 * Created by PhpStorm.
 * User: Mikus
 * Date: 19/01/2018
 * Time: 16:46
 */
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
echo "<p> Error: ".$_SESSION["error"]."</p>";
echo "<p> Message: ".$_SESSION["error_msg"]."</p>";
echo "<p> Warnings: ".$_SESSION["warning"]."</p>";
?>