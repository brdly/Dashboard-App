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
use SPATApp\Config;
use PDO;

class DatabaseTest extends TestCase
{
    public function test_db()
    {
        //Test adding form fields to database
        $this->assertTrue(DatabaseHelper::addField("country"));
        $this->assertTrue(DatabaseHelper::addField("rating"));

        //Test getting form fields from database
        $this->assertCount(1, DatabaseHelper::get("FormFields", 1));
        $this->assertCount(1, DatabaseHelper::get("FormFields", 2));

        //Test adding form data to database
        $this->assertTrue(DatabaseHelper::addData(1, "United States"));
        $this->assertTrue(DatabaseHelper::addData(1, "India"));
        $this->assertTrue(DatabaseHelper::addData(2, 4));
        $this->assertTrue(DatabaseHelper::addData(2, 3));

        //Test getting form data from database
        $this->assertCount(2, DatabaseHelper::getFormDataFromField(1, 10));
        $this->assertCount(2, DatabaseHelper::getFormDataFromField(2, 10));

        //Test deleting form field from database
        $this->assertTrue(DatabaseHelper::delete("FormFields", 1));

        //Test getting form data from deleted field
        $this->assertCount(0, DatabaseHelper::getFormDataFromField(1, 10));

        //Test deleting form data from database
        $this->assertTrue(DatabaseHelper::delete("FormData", 3));

        //Test getting remaining form data from field
        $this->assertCount(1, DatabaseHelper::getFormDataFromField(2, 10));
    }
}