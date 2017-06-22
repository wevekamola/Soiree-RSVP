$(document).ready(function(){
    console.log("ur document is ready");
    $("#addevent").click(function(){
        console.log("i m adding event");
        var dataString = 'action=addevent&'+$('#event_form').serialize();
        var theme_name = $("#theme_name").val();
        var event_date = $("#event_date").val();
        var venue = $("#venue").val();
        console.log(dataString);
        if(theme_name==''||event_date==''||venue==''){
            alert("Please Fill All Fields");
        }
        else{
            console.log("hello here i'm");
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: dataString,
                success: function(result){
                    console.log(result);
                    document.getElementById('theme_name').value = '';
                    document.getElementById('event_date').value = '';
                    document.getElementById('venue').value = '';

                    alert("Your Event has updated");

                    }
            });
        }
    });

    $("#addguests").click(function(){
        console.log("i m adding guest");
        var dataString = 'action=addguest&'+$('#guest_form').serialize();
        var emailid = $("#emailid").val();
        var guestname = $("#guest_name").val();
        var contact_number = $("#contact_number").val();
        console.log(dataString);
        if(guest_name==''||emailid==''||contact_number==''){
            alert("Please Fill All Fields");
        }
        else{
            console.log("hello here i'm");
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: dataString,
                success: function(result){
                    console.log(result);
                    document.getElementById('emailid').value = '';
                    document.getElementById('guest_name').value = '';
                    document.getElementById('contact_number').value = '';

                    alert("You have added a guest successfully");

                    }
            });
        }
    });

    $("#rsvp").click(function(){
        console.log("under rsvp");
        var email = $("#email_guest").val();
        var password= $('#guest_password').val();
        var dataStringa = 'action=rsvp&' + $('#rsvp_form').serialize();
        console.log(dataStringa);
        if(email==''|| password==''){
            alert("Please fill both Fields");
        }
        else{
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: dataStringa,
                success: function(result){
                    console.log(result);
                    document.getElementById('email_guest').value = '';
                }
            });
        }
    return false;    
    });

    $("#forget_password").click(function(){
        console.log("forgot_password");
        var email = $("#email_guest").val();
        var no= $('#guest_contact_number').val();
        var dataStringa = 'action=forgot&' + $('#forgot_password_form').serialize();
        console.log(dataStringa);
        if(email==''|| no==''){
            alert("Please fill both Fields");
        }
        else{
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: dataStringa,
                success: function(result){
                    console.log(result);
                    document.getElementById('email_guest').value = '';
                    document.getElementById('guest_contact_number').value = '';
                }
            });
        }
    return false;    
    });
});