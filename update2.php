<?php
   $servername='localhost';
   $username='root';
   $password='';
   $dbname = "contact_database";
   $conn=mysqli_connect($servername,$username,$password,"$dbname");
   if(!$conn){
      die('Could not Connect My Sql:' .mysql_error());
   }

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE join_gym set client_id='" . $_POST['client_id'] . "', name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', address='" . $_POST['address'] . "' ,category='" . $_POST['category'] . "' WHERE client_id='" . $_POST['client_id'] . "'");
$message = "Record Updated Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM client_id WHERE client_id='" . $_GET['client_id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
Client_id: <br>
<input type="hidden" name="client_id" class="txtField" value="<?php echo $row['client_id']; ?>">
<input type="text" name="client_id"  value="<?php echo $row['client_id']; ?>">
<br>
Name: <br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
Email :<br>
<input type="email" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
Address:<br>
<input type="text" name="address" class="txtField" value="<?php echo $row['address']; ?>">
<br>
<input type="submit" name="save" value="Submit" class="buttom">

</form>
</body>
</html>