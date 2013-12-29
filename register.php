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
	  
	  echo "<script type='text/javascript'>
			alert('Register Successful!');
			window.location='index.html';
			</script>";
	  
	  mysql_close();
	
      
?>