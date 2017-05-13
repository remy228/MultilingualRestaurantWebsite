<?php
/**
 *Dennis Hsu
 *CS 174 Homework 3
 * Index.php Page for User
 */

namespace CS174\hw5;
//session_start();
error_reporting(0);
//use CS174\hw5\controller as C;

if ($_GET['c'] == 'admin')
{
	include_once("../view/loginView.php");
}
else
{
	include_once("restaurantController.php");
    /* $main = new C\restaurantController();
    $main->maincontrol(); */

}
