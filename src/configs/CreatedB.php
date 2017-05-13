<?php
/**
 * User: SJSU Student
 * Date: 4/11/2016
 * Time: 11:13 PM
 */
function initializeDB()
{

	$config = require("config.php");
	$con = mysqli_connect($config['host'], $config['username'], $config['password']);


    $stmt = mysqli_prepare($con, 'DROP DATABASE IF EXISTS onTheEdge');
    mysqli_stmt_execute($stmt);

    $stmt = mysqli_prepare($con,'CREATE DATABASE onTheEdge;' );
    mysqli_stmt_execute($stmt);

    mysqli_select_db($con,"onTheEdge");

    $stmt = mysqli_prepare($con,'DROP TABLE IF EXISTS receipt;');
    mysqli_stmt_execute($stmt);

	//create User Table
    $stmt = mysqli_prepare($con,'CREATE TABLE receipt(email varchar(50), amount int(100))');
    mysqli_stmt_execute($stmt);
	
	$stmt = mysqli_prepare($con,'DROP TABLE IF EXISTS rewards;');
    mysqli_stmt_execute($stmt);
	$stmt = mysqli_prepare($con,'CREATE TABLE rewards(email varchar(50), rewardpoints double(100,1))');
    mysqli_stmt_execute($stmt);
	
	$stmt = mysqli_prepare($con,'DROP TABLE IF EXISTS admin;');
    mysqli_stmt_execute($stmt);
	$stmt = mysqli_prepare($con,'CREATE TABLE admin(name varchar(20), password varchar(100))');
    mysqli_stmt_execute($stmt);
	
	$stmt = mysqli_prepare($con,'insert into admin values("admin", "admin")');
    mysqli_stmt_execute($stmt);


    $stmt->close();
    $con->close();

    header("Location:../controller/index.php?message=Database 'onTheEdge' was successfully created");
}

initializeDB();
	
