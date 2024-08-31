<?php
include_once "include/database.php";
include_once "include/functions.php";

if(isset($_POST['register'])) {
	$email_id = validate($_POST['email']);
	$userid = validate($_POST['username']);
	$pass = validate($_POST['password']);
	$pass_2 = validate($_POST['password_confirm']);
	$code = substr(md5(mt_rand()),0,15);

	if(empty($email_id) || empty($pass) || empty($userid)){
		header('Location:register.php?error=empty');
		exit();
	}
	else if($pass !== $pass_2){
		header('Location:register.php?error=empty');
		exit();
	}
	else {
		$sql = "INSERT INTO verify(username,email,user_password,code) VALUES ('$userid','$email_id','$pass','$code')";
		if (mysqli_query($conn, $sql)) {
			$db_id = mysqli_insert_id($conn); 
			echo "New record created successfully with last ID of-> ".$db_id;
		  } 
		  else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		  }  
		mysqli_close($conn);
	    $message = "Your Westnile Verification Code is ".$code."";
        $to=$email;
        $subject="Activation Code For Westnile Membership";
        $from = 'accounts@westnile.com';
        $body='Your Activation Code is '.$code.' Please Click On This link <a href="verification.php">Verify.php?id='.$db_id.'&code='.$code.'</a>to activate your account.';
        $headers = "From:".$from;
        mail($to,$subject,$body,$headers);
		# Send a toast
	    echo "An Activation Code Is Sent To You Check You Emails.<br>";
		echo $code;
	}
}

if(isset($_GET['id']) && isset($_GET['code']))
{
	$id = validate($_GET['id']);
	$code = validate($_GET['code']);

	$update = "SELECT * FROM verify WHERE id='$id' AND code='$code'";
	$back = mysqli_query($conn, $update);
	if (mysqli_num_rows($back) > 0) {
		$row = mysqli_fetch_assoc($back);
		$username = $row['username'];
		$email = $row['email'];
		$password = $row['user_password'];

		echo $username;
		echo $email;
		
		$user = "INSERT INTO users(username,email,user_password) VALUES ('$username','$email','$password')";
		if (mysqli_query($conn, $user)) {
			echo "User is now verified";
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		$delete = "DELETE FROM verify WHERE id='$id'";
		if (mysqli_query($conn, $delete)) {
			echo "User deleted from verify";
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);

	}
}