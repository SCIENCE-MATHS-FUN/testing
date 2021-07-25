<?php

if(empty($_POST['submit']))
{
echo "Form is not submitted!";
exit;
}

if (empty($_POST["fullname"] ) ||
empty($_POST["gender"] ) ||
empty($_POST["email"] )

)
{
echo "Please Fill the Form";
exit;
}


$name = $_POST["fullname"];
$email = $_POST["email"];
$gender = $_POST["gender"];


mail('robin.gamerz77@gmail.com' , 'New Form Submission' , "New Form Submission: Name: $name, Gender: $gender , Email: $email" );

header ('Location: thankyou.html');


?>
