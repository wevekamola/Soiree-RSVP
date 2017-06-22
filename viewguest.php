<!DOCTYPE html>
<html>
	
	<head>
		<title>Guest Details</title>
			<link rel="shortcut icon" href="icon.ico" type="image/x-icon" /><meta charset="UTF-8">
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	</head>

	<body>
		
		 <nav class="navbar navbar-toggleable-md navbar-inverse bg-primary ">    
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="">RSVP</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="rsvp.php#party">Update Event</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="rsvp.php#addguest">Add Guests</a>
                        </li>
                        <li class="nav-item active">
                           <a class="nav-link" href="viewguest.php">View Guest Details</a>
                        </li>
                </ul>
             </div>
        </nav> 

        
        	<?php
				$details=array();
				$servername = "localhost";
				$username = "root";
				$password = "vivek1234";
				$dbname = "rsvp";
				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "SELECT emailid,guest_name,contact_number,guestpre,guest_res FROM guest_details";
				$result = $conn->query($sql);
			?>
				<table class="table">
                	
  <thead class="thead-default">
		<div class="container">
        <div class="row">   <th>Name</th>
							<th>Prefrence</th>
							<th>Response</th>
							<th>Contact</th>
							<th>Email</th>
						</tr>
					</thead>

					<tbody>
		
           
						<?php
							if ($result->num_rows > 0) 
								{
							    while($row = $result->fetch_assoc()) 
							    	{

                             echo "<tr><th>".$row["guest_name"];"</th>";
						   		echo "<th> ".$row["guestpre"];"</th>";
					    		echo "<th> ".$row["guest_res"];"</th>";
                                echo "<th> ".$row["contact_number"];"</th>";
                                echo "<th>".$row["emailid"];"</th></tr>";

							        }
								} else {
							    echo "0 results";
							}
							$conn->close();

						?>
</div>
					</tbody>
				</table>

	    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
            
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>	
	</body>

</html>