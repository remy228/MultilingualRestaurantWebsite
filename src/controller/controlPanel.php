<?php
namespace CS174\hw5\controller;

use CS174\hw5 as H;

include("../view/selectView.php");
#Control Panel for the admin to save edit revert menu and provides add_a_receipt option
require_once("Controller.php");

class controlPanel extends Controller
{
    public function maincontrol()
    {
    }

    public function select_option()
    {
        require_once("../model/saveModel.php");
        $menu_sp = new H\model\saveModel();
        $menu_sp->select_option_model();  
        
   
    } #End of select_option()
    
    
    public function save_menu()
    {

        
        require_once("../model/saveModel.php");
        include("../model/reward_customers_model.php");
        $menu_sp = new H\model\saveModel();
        $menu_sp->savemodel();
		//require_once("../view/selectView.php");
        
        
    }#end of save()
    
    public function Revert()
    {
        require_once("../model/saveModel.php");
        $menu_sp = new H\model\saveModel();
        $menu_sp->revertmodel();
		//Header('Location: ../view/selectView.php');

        
        
    } #end of revert

}#End of class

    $controlP= new controlPanel();

    if(isset($_GET["amount"]))
    {
        $amt=$_GET["amount"];
        if(isset($_GET["email_address"]))
        {
            $email=$_GET["email_address"];
        }
        
        include("../model/rewards_update.php");
        
        if(isset($_GET["email_address"]))
        {
            $u=$_GET["email_address"];
            header('location: ../model/reward_email.php?rew='.$u);
            
        }
        
    }
    if(isset($_POST["Save"]))
    {
        $controlP->save_menu();
		//header('Location: ../view/selectView.php');

    }
    else if(isset($_POST["Revert"]))
    {
            $controlP->Revert();
    }
    else
    {
        $controlP->select_option();
    }


?>