<?php 
session_start();
require "includes/connect.php";
include "includes/mailer.php";
date_default_timezone_set("Africa/Nairobi");
$date = date("Y-m-d H:i:s");
$filedate = date("H_i_s");
$self_email = "info@whiterosecleaners.co.uk";


if(isset($_POST['sendsms'])){

   
            $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
            $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $service = mysqli_real_escape_string($conn, $_POST["service"]);
            $company = mysqli_real_escape_string($conn, $_POST["company"]);
            $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
            $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
            $name = $fname." ".$lname;

            $insert = "INSERT INTO lead (name, email, phone, service, company, message, date_created) VALUES ('$name', '$email', '$phone', '$service', '$company', '$desc', '$date')";

            $emsubject = "New Enquiry from the White Rose Cleaners Website";
            $embody = "
                <p>Hello,</p>
                <p>You have a new Enquiry from the website  <br/> Here is the message:</p>
                <br/>
                <p>
                <b>Sender details:</b><br/><br/>
                <b>Name:</b> ".$name." <br/>
                <b>Email:</b> ".$email." <br/>
                <b>Phone:</b> ".$phone." <br/>
                <b>Service:</b> ".$service." <br/>
                <b>Company:</b> ".$company." <br/>
                <b>Additional info:</b> ".$desc." <br/>
                </p> 
            ";
            $_SESSION['thankyou_name'] = $name;
            $_SESSION['access_ty'] = "thank you";

            maillinge($self_email, $emsubject, $embody);
            maillinge('ganiamtech@gmail.com', $emsubject, $embody);

            
            if ($conn->query($insert)===TRUE){
                
                header('location: thank-you.php');
                
            }else{
                $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
                header("location: contact.php");
            }

            
            
            exit();
        
    }
?>