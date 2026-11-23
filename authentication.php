<?php
session_start();
require "connect.php";


// If already logged in, go to dashboard
if (isset($_SESSION["user_id"])){
    header("location:dashboard.php");

}


// When login form is submitted

if ($_SERVER["REQUEST_METHOD"] === "POST") {

$email = trim($_POST['email']);
$password = ($_POST['password']);


$statement = $pdo->prepare("SELECT * FROM signup WHERE email = :email");


$statement->execute([
    "email" => $email]
);

$users = $statement->fetch(PDO::FETCH_ASSOC);


  // Check email and password
if ($users && password_verify($password, $users["password"])){


// Create session
session_regenerate_id(true);

$_SESSION["user_id"] = $users["ID"];
$_SESSION["fullname"] = $users["fullname"];


 

header("location:dashboards.php");

}


else {
    echo "invalid password or email";
}

}
