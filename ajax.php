<?php
	require_once "function.php";
	if(isset($_POST["action"])){
		switch ($_POST["action"]) {
			case 'addevent':
				print json_encode(addevent($_POST["theme_name"],$_POST["event_date"],$_POST["venue"]));
				break;
			case 'addguest':
				print json_encode(addguests($_POST["emailid"],$_POST["guest_name"],$_POST["contact_number"]));
				break;
			case 'rsvp':
				print json_encode(updatedetails($_POST["email_guest"]));
				 break;
			case 'forgot':	
				print json_encode(forget_password($_POST["email_guest"],$_POST["guest_contact_number"])); 
				break;
			default:
				echo "invalid";
				break;
		}
	}
?>