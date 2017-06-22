<!DOCTYPE html>
<html lang="en">
  
  <head>
        <!-- Required meta tags -->
        <title>DashBoard</title>
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
                            <a class="nav-link" href="#party">Update Event</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#addguest">Add Guests</a>
                        </li>
                        <li class="nav-item active">
                           <a class="nav-link" href="viewguest.php">View Guest Details</a>
                        </li>
                </ul>
             </div>
        </nav> 
        
        <div class="container-fluid">
            <br/>
                <div class="container">
                    <h1 >Update Event</h1>

                    <form  method="post" id="event_form">

                        
                                <div class="row">
                                        <label for="event_name" class="col-2 ">Theme Name</label>
                                            <div class="col-lg-4 col-md-8 col-sm-6">
                                                <input type="text" class="form-control" id="theme_name" name="theme_name" placeholder="Theme Name">
                                            </div>
                                      </div>
                                      <div class="row">
                                            
                                        <label for="date" class="col-2 col-form-label">Date</label>
                                            <div class="col-lg-4 col-md-8 col-sm-6">
                                                <input type="date" class="form-control" name="event_date" id="event_date">
                                            </div>
                                            </div>
                                            <div class="row">
                                        <label for="venue" class="col-2 col-form-label">Venue</label>
                                        <div class="col-lg-4 col-md-8 col-sm-6">
                                            <input type="text" class="form-control" id="venue" name="venue" placeholder="Venue">
                                        </div>
                                </div>
                                <button type="button" class="btn btn-primary" value="POST" id="addevent" >Submit</button>
                                </form>
            
            
                        
                </div>
                <br/><br/ >
                <div class="container">
                <form method="post" id="guest_form">     
                    
                    <h2 id="addguest">Add Guests</h2>
                                <div class="form-check">
                                        <label for="allGuest" class="form-check-label">
                                        <input type="checkbox" class="checkbox">
                                        All
                                        </label>
                                </div>
                                <div class="form-group row">
                                        <label for="Email" class="col-8 col-form-label">Email address</label>
                                        <div class="col-12">
                                            <input type="email" class="form-control" id="emailid" placeholder="Enter email" name="emailid">
                                        </div>
                                        <label for="guestname" class="col-8 col-form-label">Name Of The Guest</label>
                                        <div class="col-12">
                                           <input type="text" class="form-control" id="guest_name" placeholder="Guest Name" name="guest_name">
                                        </div>
                                        <label for="contact_number" class="col-8 col-form-label">Phone No.</label>
                                        <div class="col-12">
                                           <input type="tel" class="form-control" id="contact_number" placeholder="Contact Number" name="contact_number">
                                        </div>
                                </div>
                                <button type="submit" class="btn btn-primary" name="select" value="selectguest" id="addguests" >Submit</button>
                        <br>
                        </form> 
                </div>
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="java.js"></script>

        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
   
    </body>

</html>