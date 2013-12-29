<?php 
 // Connects to your Database 

    mysql_connect("www.fyp207.com","f6p207_shabbir","shabbir")
	or die (mysql_error());
	
	mysql_select_db("f6p207_transport") or die (mysql_error());


 //This code runs if the form has been submitted

 if (isset($_POST['submit'])) { 



 //This makes sure they did not leave any fields blank

 if (!$_POST['username'] | !$_POST['password'] | !$_POST['password2'] ) {

 		die('You did not complete all of the required fields');

 	}



 // checks if the username is in use

 	if (!get_magic_quotes_gpc()) {

 		$_POST['username'] = addslashes($_POST['username']);

 	}

 $usercheck = $_POST['username'];

 $check = mysql_query("SELECT username FROM user WHERE username = '$usercheck'") 

or die(mysql_error());

 $check2 = mysql_num_rows($check);



 //if the name exists it gives an error

 if ($check2 != 0) {

 		die('Sorry, the username '.$_POST['username'].' is already in use.');

 				}


 // this makes sure both passwords entered match

 	if ($_POST['password'] != $_POST['password2']) {

 		die('Your passwords did not match. ');

 	}


// now we insert it into the database

 	$insert = "INSERT INTO user (username,password,UserEmail,UserAddress1,UserAddress2,UserPoscode,UserCity,UserState,UserPhone)

 			VALUES ('".$_POST['username']."', '".$_POST['password']."','".$_POST['UserEmail']."','".$_POST['UserAddress1']."','".$_POST['UserAddress2']."','".$_POST['UserPoscode']."','".$_POST['UserCity']."','".$_POST['UserState']."','".$_POST['UserPhone']."')";

 	$add_member = mysql_query($insert);

 	?>