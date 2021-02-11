<?php
    if($_POST){

        if($_POST['register']){
            if(!$_POST['email']){
                $error ="Email not set.";
            }
            else if(!$_POST['password']){
                $error = "Password not set.";
            }
            else if($_POST['password_confirm'] != $_POST['password']){
                $error = "Passwords do not match.";
            }
            else if(strlen($_POST['password']) < 8){
                $error = "Password must be 8 characters or more";
            }
            else if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
                $error = "Email is not valid";
            }
            
            if($error){
                $smarty->assign('error',$error);
            }else{
                $User = new User($Conn);
                $attempt = $User->createUser($_POST);

                if($attempt){
                    $smarty->assign('success',"Your account has been created, login to access it");
                }else{
                    $smarty->assign('error',"An error occured, please try again.");
                }
            }
        }else if($_POST['login']){
            if(!$_POST['email']){
                $error ="Email not set.";
            }
            else if(!$_POST['password']){
                $error = "Password not set.";
            }

            else if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
                $error = "Email is not valid";
            }

            if($error){
                $smarty->assign('error',$error);
            }else{
                $User = new User($Conn);
                $user_data = $User->loginUser($_POST['email'],$_POST['password']);
                if($user_data){
                    header('Location: index.php?p=account');
                    exit();
                }else{
                    $smarty->assign('error','Incorrect email/password');
                }
            }
        }
        
    }