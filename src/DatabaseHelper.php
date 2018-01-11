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
    private static function databaseConnection()
    {
        $dsn      = "mysql:dbname=" . Config::$dbName . ";host=" . Config::$dbHost;
        $user     = Config::$dbUsername;
        $password = Config::$dbPassword;
        try {
            return new PDO($dsn, $user, $password);
        } catch (\PDOException $e) {
            echo "Connection Failed: " . $e->getMessage();
        }

        return null;
    }

    public static function addField($formField)
    {
        $dbh = self::databaseConnection();

        $sth = $dbh->prepare("INSERT INTO FormFields VALUES (DEFAULT, :formField, DEFAULT)", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        return $sth->execute(array(':formField' => $formField));
    }

    public static function addData($formField, $dataItem)
    {
        $dbh = self::databaseConnection();

        $sth = $dbh->prepare("INSERT INTO FormData VALUES (DEFAULT, :formField, :dataItem, DEFAULT)", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        return $sth->execute(array(':formField' => $formField, ':dataItem' => $dataItem));
    }

    public static function edit($table, $id, $data)
    {
        //
    }

    public static function delete($tableName, $id)
    {
        $dbh = self::databaseConnection();

        $tableName = \htmlspecialchars($tableName);

        $sth = $dbh->prepare("UPDATE $tableName SET `deleted` = 1 WHERE `id` = :fieldID", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        return $sth->execute(array(':fieldID' => $id));
    }

    public static function get($tableName, $id)
    {
        $dbh = self::databaseConnection();

        $tableName = \htmlspecialchars($tableName);

        $sth = $dbh->prepare("SELECT `fieldName` FROM $tableName WHERE `id` = :fieldID AND `deleted` = 0", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        $sth->execute(array(':fieldID' => $id));

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findFieldID($stringData)
    {
        $dbh = self::databaseConnection();

        $sth = $dbh->prepare("SELECT `id` FROM `FormFields` WHERE `fieldName` = :fieldString AND `deleted` = 0", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        $sth->execute(array(':fieldString' => $stringData));

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getFormDataFromField($id, $limit)
    {
        $dbh = self::databaseConnection();

        $sth = $dbh->prepare("SELECT `formData` FROM FormData WHERE `idFormField` = :fieldID AND `deleted` = 0 AND (SElECT `deleted` FROM FormFields WHERE `id` = :fieldID) = 0", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        $sth->execute(array(':fieldID' => $id));

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}