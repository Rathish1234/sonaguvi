<?php
if(!isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];

header("Location: Log.html");
exit;
}
?>