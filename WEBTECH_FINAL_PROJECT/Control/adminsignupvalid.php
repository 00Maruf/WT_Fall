<?php

include "../Model/model.php";
$fname=$lname=$age=$salary=$address=$id="";

if(isset($_REQUEST["Submit"]))
{
    if(empty($_REQUEST["username"]))  
      {  
           //$error = "<label>Enter Name</label>"; 
           echo "<h3>Username is empty</h3>";
      }
      else if(empty($_REQUEST["email"]) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_REQUEST["email"]))  
      {  
           //$error = "<label>Enter Name</label>"; 
           echo "<h3>Please provide your email</h3>";
      }
      else if(empty($_REQUEST["pass"]))  
      {  
           //$error = "<label>Enter Name</label>"; 
           echo "<h3>Password is empty</h3>";
      }
      else if(empty($_REQUEST["dob"]))  
      {  
           //$error = "<label>Enter Name</label>"; 
           echo "<h3>Date Of Birth is empty</h3>";
      }
      else if(empty($_REQUEST["gender"]))  
      {  
           //$error = "<label>Enter Name</label>"; 
           echo "<h3>Gender is empty</h3>";
      }
      
      else if(empty($_REQUEST["language"]))
      {
        //$error = "<label>Enter Name</label>";
        echo "<h3>Language is empty</h3>";
      }

      else if(empty($_REQUEST["country"]))
      {
        //$error = "<label>Enter Name</label>";
        echo "<h3>Country is empty</h3>";
      }
      else if(empty($_REQUEST["address"]))
      {
        //$error = "<label>Enter Name</label>";
        echo "<h3>Address is empty</h3>";
      }

      
      else  
      {  
          $user = $_REQUEST["username"];
          $email= $_REQUEST["email"];
          $pass = $_REQUEST["pass"];
          $dob = date('Y-m-d',strtotime($_REQUEST["dob"]));
          $gender = $_REQUEST["gender"];
          $languages = $_REQUEST["language"];
          $lan="";
          $country = $_REQUEST["country"];
          $address = $_REQUEST["address"];


            $dbobj=new db();
            $conobj=$dbobj->opencon();

            foreach($languages as $item){
               $lan .= $item.",";
               $lan2 = rtrim($lan, ",");
            }

            $dbobj->InsertData($conobj,'admin',$user,$email,$pass,$dob,$gender,$lan2,$country,$address);

            $dbobj->closecon($conobj);
          
      } 

}

?>