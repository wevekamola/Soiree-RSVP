<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "internrsvp";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}  

	$email_guest=@$_POST['email_guest'];
	$prefrence=$_POST['prefrence'];

	// $q= "SELECT email
	// 	FROM guestdetails
	// 	WHERE email='$email_guest' ";
	echo"<center>";	
		
	// $result=mysqli_query($conn,$q);
	// $rowcount=mysqli_num_rows($result);	
	// if ($rowcount>0)  {
			$sql = " UPDATE guestdetails
			SET guestprefrence='$prefrence' , guestrespone='YES'
			WHERE email='$email_guest' ";	
			$result=mysqli_query($conn,$sql);
			if (mysqli_num_rows($result)>0) {
			   	echo "THANK YOU FOR YOUR PRECIOUS TIME TO RESPONSE TO US";	
			// }else{
			// 			echo "Error: " . $sql . "<br>" . $conn->error;
			// }
			} else {
					echo "THANK YOU, BUT YOU ARE NOT REGISTERED TO US! HAVE A GOOD TIME";
			}		
	
	echo"</center>";
	// header("refresh:3; url=rsvp.php");
	$conn->close();
?>