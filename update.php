<?php
   $servername='localhost';
   $username='root';
   $password='';
   $dbname = "contact_database";
   $conn=mysqli_connect($servername,$username,$password,"$dbname");
   if(!$conn){
      die('Could not Connect My Sql:' .mysql_error());
   }

$client_id=$_GET['client_id'];
$qry=mysqli_query($db,"select*from join_gym where client_id=$client_id");
$data=mysqli_fetch_array($qry);

if(isset($POST['update']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$edit=mysqli_query($db,"update join_gym set name='$name',email='$email',address='$address' where client_id='#client_id'");
if($edit)
{
mysqli_close($db);
header("location:contact_tbl1.php");
exit;
}
else{
echo mysqli_error();
}
}

?>
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