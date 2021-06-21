<?php


    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        if(empty($email)|| empty($subject) || empty($message)){
            echo 0;
            die;
        }

        if(wp_mail(get_option('admin_email'),$subject,$message)){
            $msg = "We've sent your message successfully!";
        }else{
            echo 0;
        }
    }