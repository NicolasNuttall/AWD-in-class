<?php
if($_POST){
    if(!$_POST["currentPassword"]){
        $error ="Current password not set";
    }
    if(!$_POST["newPassword"]){
        $error="New password not set";
    }
    if($error){
        $smarty->assign('error',$error);
    }
    else{
        $change_pass = $User->changeUserPassword($_POST["currentPassword"],$_POST["newPassword"]);
        
        if($change_pass){
            $smarty->assign('success',"Password has been changed");
        }else{
            $smarty->assign('error',"something went wrong");
        }
    }
}