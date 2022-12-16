<?php

include "../Model/model.php";

session_start();

//static $first=true;

if(isset($_REQUEST["Submit"]))
{
    
    $dbobj=new db();
    $conobj=$dbobj->opencon();
    $result=$dbobj->adminlogin($conobj,'admin',$_REQUEST["username"],$_REQUEST["pass"]);
    $row=$result->fetch_assoc();
    $count=$result->num_rows;

    if($count == 1){  
        //echo "<h1><center> Login successful </center></h1>";  

            $_SESSION['username'] = $_REQUEST["username"];
            $_SESSION['pass'] = $_REQUEST["pass"];
            
            
            if(empty($_REQUEST["remember"]))
            {
                setcookie("username",$_REQUEST["username"],time()+5);
                setcookie("pass",$_REQUEST["pass"],time()+5);
                header("location: ../View/admindash.php");
            }
            else
            {
                //echo "not remember";
                setcookie("username",$_REQUEST["username"],5);
                setcookie("pass",$_REQUEST["pass"],5);
                header("location: ../View/admindash.php");
            }
    }  
    else{  
        echo "<h3> Login failed. Invalid username or password.</h3>";  
    }     
    
}

?>