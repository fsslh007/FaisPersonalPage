<?php
   //declare global variables
   $username = $_POST['name'];
   $useremail = $_POST['email'];
   $usersubject = $_POST['subject'];
   $userphonenumber = $_POST['phonenum'];
   $usermessage = $_POST['message'];

   echo "Thnak you for contacting us, Mr./Ms." .$username;
?>