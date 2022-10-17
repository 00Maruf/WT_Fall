<?php
include("../control/process.php");
?>
<html>
<head>
        <title>Rental Registration Form </title>
        </head>
<body>

        <h1>Registration</h1>
        <form action="" method="post">
        <form>
<table>
<tr>
               <td>Name</td> 
            <level for="gender"></level>
        <td> <select id="gender" name="gender">
    <option value="Mr.">Mr.</option>
  <option value="Ms.">Ms.</option>
<input type="text" name="name" placeholder="Enter your name"> </td>
<td><?php echo $nameError; ?></td>
</tr>
<tr>
  <td> Gender </td>
</tr>
<tr>
<td> Male<input type ="radio" name="gender"> </td>
<td> Female<input type ="radio" name="gender"> </td>
<td><?php echo $genderErr; ?></td>
</tr>
<tr>

  <td>Email Id</td> 
<td> <input type="text" email="email" placeholder="Enter your email"> </td>
<td><?php echo $emailErr; ?></td>
</tr>
<tr>

  <td>Mobile No.</td> 
<td> <input type="text" placeholder="Enter your Mobile No."> </td>
</tr>
<tr>
<tr>
  <td>Adress</td> 
<td> <textarea name="message"rows="5" cols="30"> </textarea></td>
</tr>

<td>City</td> 
<td> <input type="text" placeholder="your city"> </td>
</tr>
<tr>
  <td><input type="submit" name="enter"></td>
</tr>

</table>
</body>
</html>
    
