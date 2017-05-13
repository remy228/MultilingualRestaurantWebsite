<?php
/**
 * User: SJSU Student
 * Date: 4/11/2016
 * Time: 3:25 PM
 */

namespace CS174\hw5\controller;

use CS174\hw5 as H;

require_once("Controller.php");

class loggedin extends Controller
{
    public function maincontrol()
    {
			  $ad=$_GET["user"];
                        $pass=$_GET["password"];
                        
                        if($ad=='admin' and $pass=='admin')     
                        {                   
                     	header('Location: ../view/selectView.php');
                     	}
                     	else
                     	{
                     	    echo "Incorrect credentials";
                     	}
	}
}
$signControl = new loggedin();
$signControl->maincontrol();
