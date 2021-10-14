<?php

include 'db.php';


if(isset($_POST['submit'])){

$name =$_POST['username'];
$email = $_POST['email'];
$mobile =$_POST['telephone'];
$password = $_POST['password'];

$sql ="INSERT INTO customers () VALUES('$name','$email','$mobile','$password')";

$query=mysqli_query($conn,$sql);

if ($query){
   header('Location: login.php');
}

}

?>