<?php

session_start();
if(!isset($_SESSION["username"]))
{
    header("location: ./adminlogin.php");
}


$username=$email=$pass=$dob=$gender=$languages=$country=$address="";
$username2=$email2=$pass2=$phone=$dob2=$gender2=$languages2=$country2=$address2="";
?>

<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../Css/admindash.css">
    <link rel="stylesheet" href="../Css/buttons.css">
</head>
<body>

    <!-- Want to <a href="../Control/logoutvalid.php">logout?</a> <br> <br> -->


    <!-- <div class="col left">
    <h1>
        <?php
       
             echo "Welcome"." ".ucfirst($_SESSION["username"]);
        ?>
    </h1> <br>

        <button id="ma">Manage Admin</button> <br> <br>
        <button id="mu" type="submit" onclick="replace1()">Manage User</button> <br> <br>
        <a href="#"><button>Manage Booking Manager</button></a> <br> <br>
        <a href="#"><button>Manage Package Manager</button></a> <br> <br>
        <a href="../Control/logoutvalid.php"><button>Logout</button></a>
    </div> -->

    <div class="topdiv">
    <h1>
        <?php
         
             echo "Welcome"." ".ucfirst($_SESSION["username"]);
        ?>
    </h1> <br>
    Want to <a href="../Control/logoutvalid.php" class="logout">logout?</a>
    </div> 
    

    <!-- Admin starts -->


    <div id="admin" class="col right divadmin">
         <h1>Admin</h1> <br>

         <form action="" method="post">
            <input type="submit" name="ViewAdminData" value="View Admin Data" class="btn blue-btn">
        </form>

        <?php
            include "../Control/admindashvalid.php";
        ?>

        <br>

        <form action="" method="post">
            <input type="text" name="Searchfield" class="searchbyusername" id="searchfield" placeholder="Search By Username" onkeyup="searchdata()">
            <input type="submit" name="Searchbtn" value="Search" class="btn blue-btn">
        </form> <br>
        <p id="show"></p> <br>

       <div class="col left2">
        <h3>Searched Data</h3>
        <form action="" method="post">

        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="text" name="pass" value="<?php echo $pass; ?>"></td>
            </tr>
            <tr>
                <td>Date Of Birth:</td>
                <td><input type="text" name="dob" value="<?php echo $dob; ?>"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="text" name="gender" value="<?php echo $gender; ?>"></td>
            </tr>
            <tr>
                <td>Languages:</td>
                <td><input type="text" name="languages" value="<?php echo $languages; ?>"></td>
            </tr>
            <tr>
                <td>Country:</td>
                <td><input type="text" name="country" value="<?php echo $country; ?>"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><textarea name="address" cols="21" rows="5"><?php echo $address; ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Update" value="Update" class="btn green-btn"></td>
            </tr>
        </table>
        
        </form>
        
        </div>
       
         <div class="col right2">
        <h3>Insert Admin</h3>
        <form action="" method="post">
            <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="user"></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="text" name="e"></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="p"></td>
            </tr>

            <tr>
                <td>Date Of Birth:</td>
                <td><input type="date" name="d" max="2003-03-01"></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="g" value="Male">Male
                    <input type="radio" name="g" value="Female">Female
                </td>
            </tr>

            <tr>
                <td>Languages: </td>
                <td><input type="checkbox" name="l[]" value="English">English 
                <input type="checkbox" name="l[]" value="Bangla">Bangla
                <input type="checkbox" name="l[]" value="Hindi">Hindi
                </td>
            </tr>

            <tr>
                <td>Country: </td>
                <td>
                    <select name="c">
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="India">India</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="United States">United States</option>
                        <option value="Australia">Australia</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Address: </td>
                <td>
                    <textarea name="ad" cols="21" rows="5"></textarea>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="Insert" value="Insert" class="btn green-btn">
            </td>
            </tr>
            </table>
        </form>
        </div>
        
   
        <div class="col right">
        <h3>Delete Admin</h3>
        <form action="" method="post">
            <table>
                <td><input type="text" class="searchbyusername" placeholder="Delete By Username" name="Deletefield"></td>
                <td><input type="submit" name="Delete" value="Delete" class="btn red-btn"></td>
            </table>
        </form>
        </div>
        
      

        <script src="../Js/admindashauto.js"></script>

</body>
</html>

