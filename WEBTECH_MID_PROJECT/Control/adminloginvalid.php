<?php

session_start();

static $first=true;

if(isset($_REQUEST["Submit"]))
{

    $str_data = file_get_contents("../File/admindata.json");
    $data = json_decode($str_data,true);
    foreach ($data as $insecure_val) {
        if($insecure_val['username'] == $_REQUEST["username"] 
           && $insecure_val['pass'] == $_REQUEST["pass"]) {
            //print "found";
            //$_SESSION['signin'] = $_REQUEST["username"];
           
                $_SESSION['username'] = $_REQUEST["username"];
                $_SESSION['pass'] = $_REQUEST["pass"];
            
            
            if(empty($_REQUEST["remember"]))
            {
                setcookie("username",$_REQUEST["username"],60);
                setcookie("pass",$_REQUEST["pass"],60);
                header("location: ../View/admindash.php");
                break;
            }
            else
            {
                //echo "not remember";
                setcookie("username",$_REQUEST["username"],time()+60);
                setcookie("pass",$_REQUEST["pass"],time()+60);
                header("location: ../View/admindash.php");
                break;
            }
        }
        else{
            if($first){
            echo "<br><br><h3>Invalid username or password</h3>";
            $first=false;
            }
        }
    }
    
}

?>