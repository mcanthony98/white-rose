<?php 
session_start();
require "includes/connect.php";
include "includes/mailer.php";
date_default_timezone_set("Africa/Nairobi");
$date = date("Y-m-d H:i:s");
$filedate = date("H_i_s");
$self_email = "inquiries@boblegal.org";


if(isset($_POST['sendsms'])){

    $captcha = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : null;

	// ultimately these could be constants in a "secrets" file
	// 	aka stored as environment variables
	#$captchaPublic = constant('CAPTCHA_PUBLIC');
	#$captchaSecret = constant('CAPTCHA_SECRET');
	$captchaPublic = "6LfZhx0qAAAAAHRyj59xY6EgXKM1SoNxgcVl-yVI";
	$captchaSecret = "6LfZhx0qAAAAAKozl0q57nD9SlTLzguNoacJ3mZ2";

	$res = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$captchaSecret ."&response=".$captcha));

	if($res->success === true){
            $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
            $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $service = mysqli_real_escape_string($conn, $_POST["service"]);
            $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
            $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
            $name = $fname." ".$lname;

            $insert = "INSERT INTO lead (name, email, phone, service, message, date_created) VALUES ('$name', '$email', '$phone', '$service', '$desc', '$date')";

            $emsubject = "New Enquiry from the Bob & Bob Advocates Website";
            $embody = "
                <p>Hello,</p>
                <p>You have a new Enquiry from the website (Bob & Bob Advocates) <br/> Here is the message:</p>
                <br/>
                <p>
                <b>Sender details:</b><br/><br/>
                <b>Name:</b> ".$name." <br/>
                <b>Email:</b> ".$email." <br/>
                <b>Phone:</b> ".$phone." <br/>
                <b>Service:</b> ".$service." <br/>
                <b>Additional info:</b> ".$desc." <br/>
                </p> 
            ";
            $_SESSION['thankyou_name'] = $name;
            $_SESSION['access_ty'] = "thank you";

            maillinge($self_email, $emsubject, $embody, $email, $name);
            //maillinge('ganiamtech@gmail.com', $emsubject, $embody, $email, $name);

            
            if ($conn->query($insert)===TRUE){
                
                header('location: thank-you.php');
                
            }else{
                $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
                header("location: contact.php");
            }

            
            
            exit();
        } else{
            $_SESSION['error'] = 'Error: Human check failed!';
            header("location: contact.php");
            exit();
        }
    }
?>