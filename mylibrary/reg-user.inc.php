<?php
if(isset($_POST['submit'])){
	include "webconn.php";
	$userid = $_POST['userid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
	$phone = $_POST['phone'];
	$ext = $_POST['ext'];
	$email = $_POST['email'];
	$password1 = $_POST['password1'];
	$cpassword = $_POST['cpassword'];
	$baduser = 0;
	//clean input 
	$userid = trim($userid);

	//Check if userid is available
	
	$result = mysqli_query($dbc, "SELECT COUNT(*) FROM `users` WHERE userid = $userid");
$row =mysqli_num_rows($result);
;

	if($row !=0){
		echo "<div class='alert alert-danger alert-dismissable fade in'><a href='index.php?content=mylibrary/register' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i><strong>Error: </strong> $userid is already in use</div>";
		$baduser = 1;
	}else{
		
		//clean passwords
			$password1 = trim($password1);
	$cpassword = trim($cpassword);
		if($password1 != $cpassord){
			echo "<div class='alert alert-danger alert-dismissable fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i></a><strong>Error: </strong> Your passwords do not match</div>";
			$baduser = 1;
		}
			if($baduser != 1)
{
	//enter user info in database
	$query  = "INSERT INTO users(userid, firstname, lastname, phone, ext, roleid, catalogid, email, password) VALUES ('$userid', '$firstname', '$lastname', '$phone', '$ext', '5', '101', '$email',PASSWORD('$password1'))";
	$result = mysqli_query($dbc, $query) or die ('<center>Sorry, unable to process your request'.mysqli_error().'</center>');
  $row = mysqli_affected_rows($dbc);
	if($row>0){
	 echo "<div class='alert alert-success alert-dismissable fade in'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i></a>
    <strong>Success!</strong> Your user account has been created.
  </div>"; 
		  $to =  $_POST['email'];// this is your Email address
    $from = "mesatechcorp@gmail.com"; // this is the sender's Email address
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
    $body = "<html>\n"; 
    $body .= "<body style=\"font-family:Verdana, Verdana, Geneva, sans-serif; font-size:12px; color:#666666;\">\n"; 
    $body = $message; 
    $body .= "</body>\n"; 
    $body .= "</html>\n"; 
    $subject = "Regsitration Confirmation";
    $subject2 = "New Retail User request received from ".$firstname." ".$lastname;
    $message =  "Your user request has been approved! You may now log on at www.mesatechcorp.com. Your user account for MesaTech, $userid has been created.
	The account details are: First Name: " . $firstname . "
	Last Name: ".$lastname."
	Phone: ".$phone." 
	Ext: ".$ext."
	Email: ".$email;
    $message2 = $firstname . " " . $lastname . " has signed up with a  user id: " . "<strong>" . $userid."</strong>";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject, $message,$headers,$body);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "<div class='alert alert-success alert-dismissable fade in'> <a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i></a><strong>Success! </strong> Registration sent. Thank you " . $firstname . ", we will contact you shortly.</div>";
	} //Endof email confirmation
	    // You can also use header('Location: thank_you.php'); to redirect to another page.
	}else{
		 echo "<div class='alert alert-danger alert-dismissable fade in'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i></a>
    <strong>Error:</strong> there is a problem with your request.
  </div>"; 

	}
}
	

    }

?>