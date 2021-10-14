<?php

include 'db.php';


if(isset($_POST['login'])){

$name =$_POST['username'];
$password = $_POST['password'];

$sql="SELECT * FROM customers WHERE username='$name' AND password='$password'";
$query=mysqli_query($conn,$sql);

if (mysqli_num_rows($query)==1){
  header('Location: homepage.php');
}else{
    header('Location: login.php');
}

}
?>