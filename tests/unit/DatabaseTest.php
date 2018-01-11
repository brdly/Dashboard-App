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
        //Test adding form fields to database
        $this->assertTrue(DatabaseHelper::addField("country"));
        $this->assertTrue(DatabaseHelper::addField("rating"));
    }

    public function test_get_db()
    {
        //Test getting form fields from database
        $this->assertCount(1, DatabaseHelper::get("FormFields", 1));
        $this->assertCount(1, DatabaseHelper::get("FormFields", 2));
    }

    public function test_add_data_db()
    {
        //Test adding form data to database
        $this->assertTrue(DatabaseHelper::addData(1, "United States"));
        $this->assertTrue(DatabaseHelper::addData(1, "India"));
        $this->assertTrue(DatabaseHelper::addData(2, 4));
        $this->assertTrue(DatabaseHelper::addData(2, 3));
    }

    public function test_get_form_data_db()
    {
        //Test getting form data from database
        $this->assertNotEmpty(DatabaseHelper::getFormDataFromField(1, 10));
        $this->assertNotEmpty(DatabaseHelper::getFormDataFromField(2, 10));
    }

    public function test_delete_from_db()
    {
        //Test deleting form field from database
        $this->assertTrue(DatabaseHelper::delete("FormFields", 1));
    }

    public function test_empty_db()
    {
        //Test getting form data from deleted field
        $this->assertEmpty(DatabaseHelper::getFormDataFromField(1, 10));
    }

    public function test_delete_data_from_db()
    {
        //Test deleting form data from database
        $this->assertTrue(DatabaseHelper::delete("FormData", 3));
    }
}