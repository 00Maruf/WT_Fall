<?php

include "../Model/model.php";

if($_REQUEST["username"]==""){
    echo "No data given";
}

else{
    $mydb=new db();
    $conobj=$mydb->opencon();
    $mydata=$mydb->SearchAdmin($conobj,'admin',$_REQUEST["username"]);

    if($mydata->num_rows>0)
    {
        while($row=$mydata->fetch_assoc())
        {
            echo "<b>Username: </b>".$row["Username"];
            echo "<br>";
            echo "<b>Email: </b>".$row["Email"];
        }
    }
    else{
        echo "No result found";
    }
    $mydb->closecon($conobj);
}

?>