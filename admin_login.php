<?php
session_start();

$uname=$_POST['user'];
$pass=$_POST['psd'];

require('firstimport.php');
mysqli_select_db($conn,"$db_name")or die("cannot select DB");

if($uname=="admin" and $pass=="admin"){
	$_SESSION['name'] = $uname; // Make it so the username can be called by $_SESSION['name']    //
	echo " ....   LOGIN  ....";
	echo $_SESSION['name'];
	header("location:addTrain.php"); //	
}
else {
	echo " .... LOGIN TRY  ....";
	$_SESSION['error'] = "1";
	header("location:admin_login1.php"); //
}

 

?>

	