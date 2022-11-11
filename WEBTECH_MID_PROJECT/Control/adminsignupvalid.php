<?php

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

          $additionalArray = array(
               'username'=> $_REQUEST['username'],
                    'email'=> $_REQUEST['email'],
                    'pass'=> $_REQUEST['pass'],
                    'dob'=> $_REQUEST['dob'],
                    'gender'=> $_REQUEST['gender'],
                    'language'=> $_REQUEST['language'],
                    'country'=> $_REQUEST['country'],
                    'address'=> $_REQUEST['address']
           );


           
           
           //open or read json data
           $data_results = file_get_contents('../File/admindata.json');
           $tempArray = json_decode($data_results,true);
           
           //append additional json to json file
           


           
         
            
           
           
           $tempArray[] = $additionalArray ;
           $jsonData = json_encode($tempArray, JSON_PRETTY_PRINT);
           
           if(file_put_contents('../File/admindata.json', $jsonData))
           {
                echo "<h3>Registration Successful</h3>";
           }
           else
           {
                echo "<h3>Error!!! Registration failed</h3>";
           }
           
         
     


           



          
     } 

}

?>