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
                    // $to = $_POST['email'];
                    // $subject = "Welcome to student eat";
                    // $headers = "From: s204369@uos.ac.uk\r\n";
                    // $headers .= "Reply-To: s204369@uos.ac.uk\r\n";
                    // $headers .= "MIME-Version: 1.0\r\n";
                    // $headers .= "Content-Type: text/html charset=ISO-18859-1\r\n";
                    // $message = "<html><body>";
                    // $message .="<h1>Welcome to StudentEat</h1>";
                    // $message .="<p>You have successfully registered an account, please login</p>";
                    // $message .="</body></html>";
                    //mail($to,$subject,$message,$headers);
                    
                    $email = new \SendGrid\Mail\Mail();
                    $email->setFrom("s204369@uos.ac.uk","Nicolas Nuttall");
                    $email->setSubject("Welcome to StudentEat");
                    $email->addTo($_POST['email'],"Student");
                    $email->addContent(
                        "text/html","<h1>Welcome to StudentEat!</h1>"
                    );

                    $sendgrid=new \SendGrid('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');
                    $respone = $sendgrid->send($email);
                    $smarty->assign('success',"Yaar account has been created, login to access it");

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
                    $_SESSION["logged_in"] = true;
                    $_SESSION["user_data"] = $user_data;
                    header('Location: index.php?p=account');
                    exit();
                }else{
                    $smarty->assign('error','Incorrect email/password');
                }
            }
        }
        
    }