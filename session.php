<?php
include_once "include/database.php";
include_once "include/functions.php";

if(isset($_POST['username']) && isset($_POST['password'])) {
    $email = validate($_POST['username']);
    $password = validate($_POST['password']);
    if(empty($email) || empty($password)) {
        header('Location:login.php?error=empty');
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE username='$email' AND user_password='$password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if($row['username'] === $email && $row['user_password'] === $password) {
                session_start();
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                header("Location:index.php");
                exit();
            }
            else {
                header("Location:login.php?error=empty");
                exit();
            }
        }
        else {
            header("Location:login.php?error=empty");
            exit();
        }
    }
}