<?php

$con = mysqli_connect('localhost', 'root', '', 'ajex_crud');

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$sql = "insert into student (name, email, contact) values ('$name', '$email','$contact')";

if(mysqli_query($con,$sql)){
    echo "successfully inserted";
}else{
    echo "ERROR!!!";
}




// print_r($_POST);

?>
