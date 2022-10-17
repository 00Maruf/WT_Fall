<?php
$nameError="";
$emailErr="";
$genderErr="";
if(isset($_REQUEST["enter"]))
{
   if(empty($_REQUEST["name"]))
   {
      $nameError="name is required";
   }
   else
   {
      $nameError="your name is ".$_REQUEST["name"];
   }

   $emailErr = $_REQUEST($_POST["email"]);
   if (!filter_var($emailErr, FILTER_VALIDATE_EMAIL))
    {
  $emailErr = "Invalid email format";
}
    if (empty($_REQUEST["gender1"])){
      $genderErr="Gender is required";
    }
    else
    {
      $genderErr= "Your are".$_REQUEST["gender1"];
    }
   }  
?>