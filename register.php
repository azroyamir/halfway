<?php
	
	  $host = 'www.fyp207.com';
   	  $username = 'f6p207_shabbir';
      $password = 'shabbir';
	  $db_name="f6p207_transport"; 
	  $tbl_name="user"; 
	  
	  mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	  mysql_select_db("$db_name")or die("cannot select DB");
	  
	  $username=$_POST['username'];
	  $password=$_POST['password'];
	  $UserEmail =$_POST['UserEmail'];
	  $UserAddress1 =$_POST['UserAddress1'];
	  $UserAddress2 =$_POST['UserAddress2'];
	  $UserPoscode =$_POST['UserPoscode'];
	  $UserCity =$_POST['UserCity'];
	  $UserState =$_POST['UserState'];
	  $UserPhone =$_POST['UserPhone'];

	  $sql="INSERT INTO $tbl_name(username,password,UserEmail,UserAddress1,UserAddress2,UserPoscode,UserCity,UserState,UserPhone)
	        VALUES('$username','$password','$UserEmail','$UserAddress1','$UserAddress2','$UserPoscode','$UserCity','$UserState','$UserPhone')";
	  $result=mysql_query($sql);
	  
	   $to = $UserEmail;
       $subject = "Welcome to artShowcase";
       $message = "

       Welcome to artShowcase!

       Hi $username!

       You have just joined the newest artwork showcase website. We're glad to have you here! 
       Now you can have full access to our website and start uploading your artwork. And don't forget to browse other artworks!
       
       Below is your account username and your password:
             
       Username : $username
       Password : $password

       Click here to start login http://artshowcase.comxa.com

       This is auto generated message. Please don't reply to this email!


";
       $from = "shabbir@fyp207.com";
       $headers = "From:" . $from;
       mail($to,$subject,$message,$headers);
	  
	  header('Location: index.html');
	  
	  mysql_close();
	
      
?>