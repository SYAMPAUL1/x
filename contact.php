<?php
//variable setting
$name = $_REQUEST['name'];
$number = $_REQUEST['number'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

//check input fields
if (empty($name) || empty($number)||empty($email)|| empty($message))
{
    echo "Please fill all fields";
}

else{
    mail("onestop1199@gmail.com", "Onestop", $message , "From: $name<$email>");
    echo "<script type='text/javascript'>alert('your message sent successfully'); 
    window.history.log(-1);
    </script>";
       
}
?>