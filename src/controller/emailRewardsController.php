<?php
/**
 * User: SJSU Student
 * Date: 4/11/2016
 * Time: 3:25 PM
 */

namespace CS174\hw5\controller;

use CS174\hw5 as H;

class emailRewardsController
{
    public function sendEmail()
    {
		session_start();
		session_unset();
		include ("rewardsController.php");
	
	}
}
$signControl = new rewardsController();
$signControl->maincontrol();
