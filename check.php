<?php
include "db_connect.php"; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $inputUsername = $_POST['email'];
    $inputPassword = $_POST['password'];

    $inputUsername = mysqli_real_escape_string($conn, $inputUsername);
    $inputPassword = mysqli_real_escape_string($conn, $inputPassword);

    $hashedPassword = md5($inputPassword);

    $sql = "SELECT * FROM rest WHERE email='$inputUsername' AND password='$hashedPassword'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        header('Location: main.html');
        exit();
    } else {
        echo "You are not an authenticated user.";
    }
} else {
    header('Location: login.php');
    exit();
}
?>
