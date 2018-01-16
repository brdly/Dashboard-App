<?php
/**
 * Created by PhpStorm.
 * User: georgebroadley
 * Date: 10/01/2018
 * Time: 10:22
 */

namespace SPATApp\Tests\unit;

use PHPUnit\Framework\TestCase;
use SPATApp\App\DatabaseHelper;

class DatabaseTest extends TestCase
{
    public function test_add_field_db()
    {
        $dbh = DatabaseHelper::databaseConnection();

        //Test adding form fields to database
        $this->assertTrue(DatabaseHelper::addField($dbh, "country"));
        $this->assertTrue(DatabaseHelper::addField($dbh, "rating"));
    }

    public function test_get_db()
    {
        $dbh = DatabaseHelper::databaseConnection();

        //Test getting form fields from database
        $this->assertCount(1, DatabaseHelper::get($dbh, "FormFields", 1));
        $this->assertCount(1, DatabaseHelper::get($dbh, "FormFields", 2));
    }

    public function test_add_platform_db()
    {
        $dbh = DatabaseHelper::databaseConnection();

        //Test adding form platforms to database
        $this->assertTrue(DatabaseHelper::addPlatform($dbh,"Fiverr"));
    }

    public function test_get_platform_db()
    {
        $dbh = DatabaseHelper::databaseConnection();

        //Test getting form fields from database
        $this->assertCount(1, DatabaseHelper::get($dbh,"Platforms", 1));
    }

    public function test_add_data_db()
    {
        $dbh = DatabaseHelper::databaseConnection();

        //Test adding form data to database
        $this->assertTrue(DatabaseHelper::addData($dbh, 1, 1, null, "United States"));
        $this->assertTrue(DatabaseHelper::addData($dbh, 1, 1, null, "India"));
        $this->assertTrue(DatabaseHelper::addData($dbh, 2, 1, 1, 4));
        $this->assertTrue(DatabaseHelper::addData($dbh, 2, 1, 2, 3));
    }

    public function test_get_form_data_db()
    {
        $dbh = DatabaseHelper::databaseConnection();

        //Test getting form data from database
        $this->assertNotEmpty(DatabaseHelper::getFormDataFromField($dbh, 1, 10));
        $this->assertNotEmpty(DatabaseHelper::getFormDataFromField($dbh, 2, 10));
    }

    public function test_delete_from_db()
    {
        $dbh = DatabaseHelper::databaseConnection();

        //Test deleting form field from database
        $this->assertTrue(DatabaseHelper::delete($dbh, "FormFields", 1));
    }

    public function test_empty_db()
    {
        $dbh = DatabaseHelper::databaseConnection();

        //Test getting form data from deleted field
        $this->assertEmpty(DatabaseHelper::getFormDataFromField($dbh, 1, 10));
    }

    public function test_delete_data_from_db()
    {
        $dbh = DatabaseHelper::databaseConnection();

        //Test deleting form data from database
        $this->assertTrue(DatabaseHelper::delete($dbh, "FormData", 3));
    }

    public function test_finding_field_id()
    {
        $dbh = DatabaseHelper::databaseConnection();

        //Test finding field data
        $this->assertNotEmpty(DatabaseHelper::findFieldID($dbh, "rating"));
    }
}