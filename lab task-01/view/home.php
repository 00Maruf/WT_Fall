<?php
include ("../control/process.php");
?>
<!DOCTYPE html>
<html>
  
<head>


</head>
<body>
<form action="" method="post">
  <div class="container">
  <h> </h>
<hr>
 <center> <h3> Regestration  </h3><center>
  
 <label>Name :</label>
<input type="text" name="name"  size="5"  />
<?php echo $fnameError; ?>
 <br>
<label>  Gender  </label> <br> 
<input type="radio" name="gender" value="male" /> male
<input type="radio" name="gender" value="female" /> female
<?php echo $lnameError; ?>
<br>

<label> NID : </label> 
<input type="number" name="NID" size="13"  />
 <?php echo $adrError; ?>

 <br>
<div>
<label> Account No :</label>
<input type="number" name="Accnum"    size="11"/>
<?php echo $phnError; ?>
</div>

<br>
<label> E-mail :</label>
<input type="text" name="email"    size="15"/>
<?php echo $emailError; ?>
<br>


<label>

<input type="submit" name="submit" value="submit"  />
</div>

</form>