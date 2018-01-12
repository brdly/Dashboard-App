<?php
/**
 * Created by PhpStorm.
 * User: georgebroadley
 * Date: 10/01/2018
 * Time: 13:35
 */

namespace SPATApp\App;

use PDO;
use SPATApp\Config;

class DatabaseHelper
{
    public static function databaseConnection()
    {
        $dsn = "mysql:dbname=" . Config::$dbName . ";host=" . Config::$dbHost;
        $user = Config::$dbUsername;
        $password = Config::$dbPassword;
        try {
            return new PDO($dsn, $user, $password);
        } catch (\PDOException $e) {
            echo "Connection Failed: " . $e->getMessage();
        }

        return null;
    }

    public static function addField($dbh, $formField)
    {
        $sth = $dbh->prepare("INSERT INTO FormFields VALUES (DEFAULT, :formField, DEFAULT)", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        return $sth->execute(array(':formField' => $formField));
    }

    public static function addPlatform($dbh, $platform)
    {
        $sth = $dbh->prepare("INSERT INTO Platforms VALUES (DEFAULT, :platform, DEFAULT)", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        return $sth->execute(array(':platform' => $platform));
    }

    public static function addData($dbh, $formField, $platformID, $reviewID, $dataItem)
    {
        $sth = $dbh->prepare("INSERT INTO FormData VALUES (DEFAULT, :formField, :platformID, :reviewID, :dataItem, DEFAULT)", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        return $sth->execute(array(':formField' => $formField, ':platformID' => $platformID, ':reviewID' => $reviewID, ':dataItem' => $dataItem));
    }

    public static function edit($dbh, $table, $id, $data)
    {
        //
    }

    public static function delete($dbh, $tableName, $id)
    {
        $tableName = \htmlspecialchars($tableName);

        $sth = $dbh->prepare("UPDATE $tableName SET `deleted` = 1 WHERE `id` = :fieldID", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        return $sth->execute(array(':fieldID' => $id));
    }

    public static function get($dbh, $tableName, $id)
    {
        $tableName = \htmlspecialchars($tableName);

        $sth = $dbh->prepare("SELECT `name` FROM $tableName WHERE `id` = :fieldID AND `deleted` = 0", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        $sth->execute(array(':fieldID' => $id));

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findFieldID($dbh, $stringData)
    {
        $sth = $dbh->prepare("SELECT `id` FROM `FormFields` WHERE `name` = :fieldString AND `deleted` = 0", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        $sth->execute(array(':fieldString' => $stringData));

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getFormDataFromField($dbh, $id, $limit)
    {
        $sth = $dbh->prepare("SELECT `name` FROM FormData WHERE `idFormField` = :fieldID AND `deleted` = 0 AND (SElECT `deleted` FROM FormFields WHERE `id` = :fieldID) = 0", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        $sth->execute(array(':fieldID' => $id));

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}