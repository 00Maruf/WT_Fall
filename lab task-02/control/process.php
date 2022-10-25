<?php
$fnameError="";
$lastnameError="";
$adrError="";
$phnError="";
$emailError="";
$hasError="";


if(isset($_REQUEST["submit"]))
{

    if(empty($_FILES["myfile"]["name"]))
    {
        echo"no file uploded";
    }
    else
    {
        echo "your file name is".$_FILES["myfile"]["name"];
        move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uplods/".$_REQUEST["firstname"].".pdf");
    }
    if(empty($_REQUEST["firstname"]))
    {
        $fnameError= "Pleaas Enter your name.";
        $hasError= 1;
    }
    else
        {
            $fnameError= "Your name is ".$_REQUEST["firstname"];
        }
        if (strlen($_REQUEST["firstname"])<5)
        {
            $fnameError="your first name must contain atlist 5 letter";
            $hasError= 1;
    
        }
        else
        {
            $fnameError= "Your first name is ".$_REQUEST["firstname"];
        }
   
   
       if(empty($_REQUEST["lastname"]))
    {
        $lnameError= "Pleaas Enter your name.";
        $hasError= 1;
    }
        else
    {
        $lnameError= "Your name is ".$_REQUEST["lastname"];
    }
       if (strlen($_REQUEST["lastname"])<5)
    {
        $lnameError="your last name must contain atlist 5 letter";
        $hasError= 1;

    }
 else
    {
        $lnameError= "Your last name is ".$_REQUEST["lastname"];
    }
   if(empty($_REQUEST["adrname"]))
   {
    $adrError= "Enter address.";
    $hasError= 1;
   }
   else
   {
    $adrError= "your add is " .$_REQUEST["adrname"];
   }
   if(empty($_REQUEST["phnnum"]))
   {
    $phnError= "Enter Phone Number.";
    $hasError= 1;
   }
   else
   {
    $phnError= "your number is " .$_REQUEST["phnnum"];
   }


   if (empty($_REQUEST["email"])) {
        $emailError = "You Forgot to Enter Your Email!";
        $hasError= 1;
    }
     else
      {
        $emailError = ($_REQUEST["email"]);
      
        // check if e-mail address syntax is valid
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$emailError))
        {
            $emailError = "You Entered An Invalid Email Format"; 
            $hasError= 1;
        }
    } 
      
    if($hasError==0)
    {
        $existingdata=file_get_contents("../data/data.json");
        $existingdatainphp=json_decode("$existingdata");


       $myarr= array 
    ("Fname"=>$_REQUEST["firstname"],
     "Lname"=>$_REQUEST["lastname"],
     "Address"=>$_REQUEST["adrname"],
     "Email"=>$_REQUEST["email"],
       
    );
    $existingdatainphp[]=$myarr;
    $myjsonobj=json_encode($existingdatainphp,JSON_PRITY_PRINT);
    file_put_contents("../data/data.json",$myjsonobj);
    $mydata=file_get_contents("../data/data.json");
    $myphpdata=json_decode($mydata);
    echo "<br>Print from JSON: ".$myphpdata[0]->Fname;
    echo "<br>Print from JSON: ".$myphpdata[0]->Lname;
    echo "<br>Print from JSON: ".$myphpdata[0]->Address;
    echo "<br>Print from JSON: ".$myphpdata[0]->Email;





    }

   
}
   

 
?>
