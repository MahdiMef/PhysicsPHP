<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 1/18/2019
 * Time: 1:25 PM
 */

include "DatabaseManager.php";
$databasemanager=new DatabaseManager();
$databasemanager->createDatabase();
$databasemanager->createFormoulTable();
include "AddFormoulForm.php";