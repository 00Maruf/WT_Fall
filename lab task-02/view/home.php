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
  <center><h3> Regestration  </h3><center>
  
       <label> Firstname </label> 
      <input type="text" name="firstname"  size="15"  />
       <?php echo $fnameError; ?>
 <br>

      <label> Lastname: </label>  
      <input type="text" name="lastname"  size="15" /> 
      <?php echo $lnameError; ?>
<br>
      <label> Address : </label> 
      <input type="text" name="adrname" size="15"  />
      <?php echo $adrError; ?>

<br>

<div>
<label> Phone :</label>
<input type="text" name="phnnum"    size="15"/>
<?php echo $phnError; ?>
</div>

<br>
<label> E-mail :</label>
<input type="text" name="email"    size="15"/>
<?php echo $emailError; ?>
<br>


<label> 

<input type="submit" name="submit" value="submit"    />
</div>

</form>
