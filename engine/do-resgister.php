<?php
require_once 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$name = $_POST["display-name"];
$email = $_POST["email"];
$password = $_POST["password"];
$password_conf = $_POST["password-conf"];
 
if ($password != $password_conf) {
    echo "Password wrong";  
} else {
    $register = mysqli_query($db, "INSERT INTO users(name, email, password) VALUES('$name', '$email','$password')");
    if ($register) {
        echo 'Erledigt';
    } else {
        echo 'Fehler';
    }
}}
?>