<?php
require "connect.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$fullname = htmlspecialchars($_POST['fullname']);
$email = htmlspecialchars($_POST['email']);
$password = trim($_POST['password']);
}



$hashed = password_hash($password, PASSWORD_DEFAULT);



$sql = "INSERT INTO signup (fullname, email, password) 
VALUES (:fname, :email, :password)";

header('Location: login.html');
exit;

$statement = $pdo->prepare($sql);

$statement->execute([
    "fname" => $fullname,
    "email" => $email,
    "password" => $hashed
]);


