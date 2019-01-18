<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 1/18/2019
 * Time: 1:22 PM
 */

class DatabaseManager
{
    const  DATABASE_NAME = "formoul_db";

    function createDatabase()//فانکشن ساخت دیتابیس
    {
        $connection = mysqli_connect("localhost", "root", "");
        $sqlcommand = "CREATE DATABASE " . DatabaseManager::DATABASE_NAME;
        if (mysqli_query($connection, $sqlcommand)) {
            echo "Database creataed successfully  ";
        }
    }

    function createFormoulTable()
    {
        $connection = mysqli_connect("localhost", "root", "", DatabaseManager::DATABASE_NAME);
        $sqlCommand = "CREATE TABLE formouls (id INT UNSIGNED AUTO_INCREMENT PRIMARY  KEY,
title VARCHAR (100) ,
content varchar (300) ,
image varchar (500) ,
class INT )";
        if (mysqli_query($connection, $sqlCommand)) {
            echo "TABLE formouls CREATED successfully";
        } else {
            echo "### table NOT successfull ###";
            echo("Error description: " . mysqli_error($connection));
        }
    }

    function AddFormoul($title, $content, $image, $class)
    {
        $connection = mysqli_connect("localhost", "root", "", DatabaseManager::DATABASE_NAME);
        $sqlCommand = "INSERT INTO formouls(title,content,image,class) VALUES('$title','$content','$image','$class') ";
        if (mysqli_query($connection, $sqlCommand)) {
            echo "formoul added to table successfully";
        } else {
            echo "## formoul NOT ADDED to table ## ";
            echo " erore " . mysqli_error($connection);

        }
    }

    function getFormoul()
    {
        $connection = mysqli_connect("localhost", "root", "", DatabaseManager::DATABASE_NAME);
        $sqlQuery = "SELECT * FROM formouls";
        $result = $connection->query($sqlQuery);
        $formoulArray = array();

        if ($result->num_rows > 0) {

            for ($i = 0; $i < $result->num_rows; $i++) {
                $formoulArray[$i] = $result->fetch_assoc();
            }
        }
        echo json_encode($formoulArray);

    }
}