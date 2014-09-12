<?php
session_start();

    require "Services/Twilio.php";
 
    // Step 2: set our AccountSid and AuthToken from www.twilio.com/user/account
    $AccountSid = "AC8842b1837851d75266dd97b4a7f675f5";
    $AuthToken = "ebe3be3ac88a48a7aa5ce618958c3b3f";
 
    // Step 3: instantiate a new Twilio Rest Client
    $client = new Services_Twilio($AccountSid, $AuthToken);
 
    // Step 4: make an array of people we know, to send them a message. 
    // Feel free to change/add your own phone number and name here.
   // $people=$_SESSION['phone'] => $_SESSION['name'];
 
    // Step 5: Loop over all our friends. $number is a phone number above, and 
    // $name is the name next to it
 
        $sms = $client->account->messages->sendMessage(
 
        // Step 6: Change the 'From' number below to be a valid Twilio number 
        // that you've purchased, or the (deprecated) Sandbox number
            "+17325043998", 
 
            // the number we are sending to - Any phone number
            $_SESSION['phone'],
 
            // the sms body
            "Hey you have an opportunity to increase your points!"
        );
 
        // Display a confirmation message on the screen
        echo "Sent message";
        echo "<form action=\"profile.php\">";
        echo "<br>";
        echo "<input type=\"submit\" value=\"Return to Profile\">";
        echo "</form>";
    ?>