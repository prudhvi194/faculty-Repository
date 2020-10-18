<?php
mysql_connect("localhost","root","","project") or die ("not connected");
mysql_select_db("project",$d) or die("not selected");
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$query="INSERT INTO signup VALUES('$username','$email','$password')";
if(mysql_query($query)
{
  echo "submited";
}
}
?>
