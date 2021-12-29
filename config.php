<?php
$server = "localhost";
$user = "root";
$pass = "Teja@12345";
$database = "signup_login";
$conn = mysqli_connect($server,$user,$pass,$database);

if(!$conn){
    die( "<script>alert('connection failed')</script>");
}
?>