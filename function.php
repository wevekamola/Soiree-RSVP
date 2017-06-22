<?php

	function addevent(){	
		$servername = "localhost";
		$username = "root";
		$password = "vivek1234";
		$dbname = "rsvp";

		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) 
		{
		    die("Connection failed: " . $conn->connect_error);
		}
		$theme_name=$_POST['theme_name'];
		$event_date=$_POST['event_date'];
		$venue=$_POST['venue'];
		$sql = "INSERT INTO event(theme_name,event_date,venue) VALUES('$theme_name', '$event_date', '$venue')";

		
		$conn->close();
	}

	function addguests(){
		$servername = "localhost";
		$username = "root";
		$password = "vivek1234";
		$dbname = "rsvp";

		$conna = new mysqli($servername, $username, $password, $dbname);
		if ($conna->connect_error) 
		{
		    die("Connection failed: " . $conna->connect_error);
		}
		$emailid=@$_POST['emailid'];
		$guest_name=$_POST['guest_name'];
		$contact_number=$_POST['contact_number'];
		$sqla = "INSERT INTO guest_details (emailid,guest_name,contact_number) VALUES('$emailid', '$guest_name', '$contact_number')";

		$conna->close();
	}

	function updatersvp() {
		$servername = "localhost";
		$username = "root";
		$password = "vivek1234";
		$dbname = "rsvp";

		$connb = new mysqli($servername, $username, $password, $dbname);
		if ($connb->connect_error) 
		{
		    die("Connection failed: " . $connb->connect_error);
		}
		$emailid=@$_POST['emailid'];

		$q= "SELECT emailid,guest_name
		FROM Guest_details
		WHERE emailid='$emailid' ";
		echo"<center>";	
		$result=mysqli_query($connb,$q);	
		if (mysqli_num_rows($result)>0)  {
			$sqlb = " UPDATE Guest_details
			SET   guest_res='Confirm'
			WHERE emailid='$emailid' ";	
			if ($connb->query($sqlb) === TRUE) {
				$row = $result->fetch_assoc();
			   	echo "THANK YOU "."<strong>".$row["guest_name"]."</strong>"." FOR YOUR PRECIOUS TIME TO RESPONSE TO US";	
			}else{
						echo "Error: " . $sqlb . "<br>" . $connb->error;
			}
		} else {
			echo "THANK YOU, BUT YOU ARE NOT REGISTERED TO US! HAVE A GOOD TIME";
		}		

	
		$connb->close();	}
?>