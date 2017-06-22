<!DOCTYPE html>
<html>
	<head>
		<title>RSVP</title>
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
            <a class="navbar-brand" href="#" >RSVP</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="rsvp.php">Add Event</a>
                        </li>
                </ul>
             </div>
        </nav> 
       	
			<div class="container">
                <table class="table table-sucess">
<div class="text-algin:center">
                <!---fetching data from database---->
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

						$sql = "SELECT theme_name, event_date, venue FROM event
							ORDER BY event_id Desc";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) 
							{
						    $row = $result->fetch_assoc();
						    	echo "<br/><thead><tr><th>Theme: ".$row["theme_name"];"</th>";
						   		echo "<th> Date: ".$row["event_date"];"</th>";
					    		echo "<th> Venue: ".$row["venue"];"</th></tr></thead>";
							} else {
						    echo "0 results";
						}
						$conn->close();
					?>
			</div>
            	</table>
                </div>

					<div class="container">
                    <form action='function.php' method='post' id='myform'>
							<div class="row">
                            <label for="Email" class="col-lg-12 col-md-12 col-sm-12">Enter Your Email address to Confirm RSVP</label>
                            
                            <div class="col-lg-6 col-md-8 col-sm-6">
			                <input type="email" class="form-control" id="email_guest" placeholder="Enter Your Email Address" name="emailid">
                            <br>
			                <button id='insert'>Insert</button>
            
                            <br>
                            <br>
                            </div>
                            <div class="col-lg-6 col-md-8 col-sm-6">
                            

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

                $sql = "SELECT emailid,guest_name,contact_number,guestpre,guest_res FROM guest_details limit 13";
                $result = $conn->query($sql);
            ?>
                <table class="table">
                    
       <thead class="thead-default">
        <div class="container">
        <div class="row">   <th>Name</th>
                            <th>Status</th>
                            
                    </thead>

                    <tbody>
        
           
                        <?php
                            if ($result->num_rows > 0) 
                                {
                                while($row = $result->fetch_assoc()) 
                                    {

                             echo "<tr><th>".$row["guest_name"];"</th>";
                                echo "<th> ".$row["guest_res"];"</th>";
                                
                                    }
                                } else {
                                echo "0 results";
                            }
                            $conn->close();

                        ?>
</div>
                    </tbody>
                </table>






                            </div>
                            </div>
                        
                            </div>
                            </div>
			                
			                	
			                
			                </form>
			
                    </div>
					
			 <script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
    
	     <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>	 
	</body>
</html>