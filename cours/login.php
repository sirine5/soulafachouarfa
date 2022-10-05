<?php  
session_start();
include "config.php";
if (isset($_POST['emailAdress']) && isset($_POST['password']) ) {
	function validation($data)

	{
		$data = htmlspecialchars($data);
		return $data;
	}


$email = $_POST['emailAdress'];
$mdp = $_POST['password'];

$sql="SELECT * FROM `user` WHERE `email`='$email'AND `mdp`='$mdp'";
$rs=mysqli_query($conn,$sql);
if (mysqli_num_rows($rs) === 1) {
	$row = mysqli_fetch_assoc($rs);
	if ($row['email'] === $email &&  $row['mdp'] === $mdp) {
		echo "logged in ";
		$_session['email'] = $row['email'];
		$_session['mdp'] = $row['mdp'];
	     	header("Location: index.php");
	     	exit();
	}else{	header("Location: log.php?inconnu email or mdp");}
}else { header("Location: log.php?user not found");exit();}

 
}




?>