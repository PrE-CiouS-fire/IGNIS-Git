<?php
$dsn= "mysql:host=localhost;dbname=yourdbname";

$user = "username";
$password ="";

try{
    $pdo = new PDO($dsn, $user, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}

catch(PDOException $e){
    die("connection error: " . $e->getMessage());
}



// if ($pdo){
//     echo "site connected";
// }

// else{
//     echo "site not connected";
// }
