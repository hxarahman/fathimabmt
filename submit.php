<?php 
date_default_timezone_set("Asia/Dubai");
$date = date("h:i")." / ". date("d M Y");

session_start();
require 'DBconfig.php';
include 'get.php';

if(isset($_POST['set_cookie'])){
    $lang = $_POST['lang'];
    setcookie("Language",$lang, time() + (10 * 365 * 24 * 60 * 60));
}

if(isset($_POST['Login'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];
  
    //CHECK USER & PASS IN DATA BASE
    $query= "SELECT * FROM `user` WHERE `username`='$username' AND `password`='$pass';";
    $query_run = mysqli_query($conn,$query);
      
    if(mysqli_num_rows($query_run)>0){
        $_SESSION['admin'] = true;
        echo json_encode(array("success"=>true));
    }else{
        echo json_encode(array("msg"=>"Invalid Information"));
    }
}

if(isset($_POST['submitContact'])){
    $name = $_POST['name'];
    $subject = 'FathimaBMT.com';
    $mailFrom = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
  
    $mailTo = 'info@fathimabmt.com';
    $header = 'From: ' .$mailFrom;
    $txt = "You have received an e-mail From ".$name." Phone number : ".$phone." </b>.\n\n".$message;
    
    mail($mailTo, $subject, $txt, $header);
    echo json_encode("Thank You For Contacting Us");
}

if(isset($_POST['submitEnquiry'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $query = "INSERT INTO `enquiry`(`name`, `email`, `phone`, `subject`, `message`, `date_uploaded`) VALUES ('$name','$email','$phone','$subject','$message','$date')";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo json_encode("Thank You For Contacting Us");
        $mailTo = 'info@fathimabmt.com';
        $header = 'From: ' .$email;
        $txt = "You have received an enquiry From ".$name." Phone number : ".$phone." .\n\n Please Checkout : https://fathimabmt.com/admin";
        
        mail($mailTo, $subject, $txt, $header);
    }else{
        echo json_encode("Something error Occured");
    }
}

if(isset($_POST['updateEnquiry'])){
    $id = $_POST['id'];
    $value = $_POST['value'];

    $query = "UPDATE `enquiry` SET `is_solved` = '$value' WHERE `id` = '$id'";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo json_encode("Successfully Updated");
    }else{
        echo json_encode("Something error Occured");
    }
}

if(isset($_POST['deleteEnquiry'])){
    $id = $_POST['id'];

    $query = "DELETE FROM `enquiry` WHERE `id` = '$id'";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo json_encode("Successfully Deleted");
    }else{
        echo json_encode("Something error Occured");
    }
}


?>