<?php

		$fname = $_GET['fname'];
		$phonenum = $_GET['phonenum'];
		$email = $_GET['email'];
		$psw = $_GET['psw'];
		
		echo "Your full name is: ".$fname."<br>"; 
		echo "Your phone number is: ".$phonenum."<br>";	
		echo "Your password is: ".$psw."<br>";		
		echo "Your email address is: ".$email;
?>