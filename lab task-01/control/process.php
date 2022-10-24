<?php
$fnameError="";
$adrError="";
$lnameError="";
$phnError="";
$emailError="";

if(isset($_REQUEST["submit"]))
{
    if(empty($_REQUEST["firstname"]))
    {
        $nameError= "Pleaas Enter your name.";
        
    }
    else
        {
            $nameError= "Your name is ".$_REQUEST["name"];
        }
        if (strlen($_REQUEST["name"])<15)
        {
            $fnameError="your first name must contain atlist 5 letter";
    
        }
        else
        {
            $nameError= "Your name is ".$_REQUEST["name"];
        }
   
   
    if(empty($_REQUEST["gender"]))
    {
        $lnameError= "Pleaas Enter your gender.";
    }
    else
    {
        $lgenderError= "Your name is ".$_REQUEST["male"];
    }
    if (strlen($_REQUEST["lastname"])<5)
    {
        $lnameError="your gender must contain letter";

    }
    else
    {
        $lgenderError= "Your gender is ".$_REQUEST["female"];
    }
   if(empty($_REQUEST["nidnum"]))
   {
    $adrError= "Enter nid number.";
   }
   else
   {
    $adrError= "your nid is " .$_REQUEST["nidname"];
   }
   if(empty($_REQUEST["phnnum"]))
   {
    $phnError= "Enter Phone Number.";
   }
   else
   {
    $phnError= "your number is " .$_REQUEST["phnnum"];
   }


   if (empty($_REQUEST["email"])) {
        $emailError = "You Forgot to Enter Your Email!";
    }
     else
      {
        $emailError = ($_REQUEST["email"]);
      
        // check if e-mail address syntax is valid
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$emailError))
        {
            $emailError = "You Entered An Invalid Email Format"; 
        }
    } 

   
}
   

 
?>
