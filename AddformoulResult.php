<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 1/18/2019
 * Time: 1:45 PM
 */
$title=$_POST['title'];
$content=$_POST['content'];
$image=$_POST['image'];
$class=$_POST['class'];
include "DatabaseManager.php";
$databsemanager = new DatabaseManager();
$databsemanager->AddFormoul($title,$content,$image,$class);