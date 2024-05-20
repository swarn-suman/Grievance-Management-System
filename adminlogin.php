<?php
$name=$_POST['name'];
$pass=$_POST['passw'];

if($name=="knjha" && $pass=="12345")
{
	echo "<script>window.location.assign('afteradminlogin.php');</script>";
}
else
{
	readfile('adminlogin2.html');
}


?>
