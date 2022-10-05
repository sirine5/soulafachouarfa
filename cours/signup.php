<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['SUBMIT'])) {
   $conn= mysqli_connect('localhost','root','','ecours') or die("connection failed:".mysqli_connect_error());
   // $nom=test_input($_POST["nom"]); 
    $nom = $_POST["useername"];
    $email=$_POST['emailAdress']; 
    $mdp=$_POST['password'];
    $mdpC=$_POST['passwordC']
     function test_input($data)
    {
       $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
    }

   if (isset($_POST['username']) && isset($_POST['emailAdress']) && isset($_POST['password']) && isset($_POST['passwordC']) ) {




 $sql= "INSERT INTO `users` ('name', 'email', 'mdp', 'mdpc') VALUES ('$nom','$email','$mdp', '$mdpC')";
   $Result=mysqli_query($conn,$sql);
   if ($Result) {header("Location: conn.php");
 echo "successful";



 }  else { echo "erreur";}



 }}
 ?>