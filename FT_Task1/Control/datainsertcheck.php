<?php

include "../Model/model.php";
$fname=$lname=$age=$salary=$address=$id="";
if(isset($_POSREQUEST["Insert"])){

        if(empty($_REQUEST["fname"]) || empty($_REQUEST["lname"]) || empty($_REQUEST["age"]) || empty($_REQUEST["salary"]) || empty($_REQUEST["address"]))
        {
            echo "All field is required"."<br>"."<br>";
        }
        else
        {
            $dbobj=new db();
            $conobj=$dbobj->opencon();
            $dbobj->InsertData($conobj,'person',$_REQUEST["fname"],$_REQUEST["lname"],$_REQUEST["age"],$_REQUEST["salary"],$_REQUEST["address"]);
            $dbobj->closecon($conobj);
        }
    

}

if(isset($_REQUEST["ViewData"])){
    $dbobj=new db();
    $conobj=$dbobj->opencon();
    $presult=$dbobj->ViewData($conobj,'person');
    if($presult->num_rows>0)
    {
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Id</th>"."<th>First Name</th>"."<th>Last Name</th>"."<th>Age</th>"."<th>Salary</th>"."<th>Address</th>";
        echo "</tr>";
        while($row=$presult->fetch_assoc())
        {
            echo "<tr>";
            echo '<td>'.$row['Id'].'</td>';
            echo '<td>'.$row['fname'].'</td>';
            echo '<td>'.$row['lname'].'</td>';
            echo '<td>'.$row['age'].'</td>';
            echo '<td>'.$row['salary'].'</td>';
            echo '<td>'.$row['address'].'</td>';
            echo "</tr>";
        }
        echo "</table>"."<br>";
    }
    else
    {
        echo "No data found"."<br>"."<br>";
    }
    $dbobj->closecon($conobj);
}

if(isset($_REQUEST["Searchbtn"])){
    if(empty($_REQUEST["Search"]))
    {
        echo "Search Field is empty"."<br>"."<br>";
    }
    else
    {
        $dbobj=new db();
        $conobj=$dbobj->opencon();
        $sresult=$dbobj->SearchData($conobj,'person',$_REQUEST["Search"]);
        if($sresult->num_rows>0)
        {
           
            while($row=$sresult->fetch_assoc())
            {
                
                $id=$row['Id'];
                $fname=$row['fname'];
                $lname=$row['lname'];
                $age=$row['age'];
                $salary=$row['salary'];
                $address=$row['address'];
            }
           
        }
        else
        {
            echo "No data"."<br>"."<br>";
        }
        $dbobj->closecon($conobj);
    }
}

if(isset($_REQUEST["Update"])){
    if(empty($_REQUEST["Id"]) || empty($_REQUEST["fname"]) || empty($_REQUEST["lname"]) || empty($_REQUEST["age"]) || empty($_REQUEST["salary"]) || empty($_REQUEST["address"]))
    {
        echo "All field is required"."<br>"."<br>";
    }
    else
    {
        $dbobj=new db();
        $conobj=$dbobj->opencon();
        $dbobj->UpdateData($conobj,'person',$_REQUEST["Id"],$_REQUEST["fname"],$_REQUEST["lname"],$_REQUEST["age"],$_REQUEST["salary"],$_REQUEST["address"]);
        $dbobj->closecon($conobj);
    }
}

?>