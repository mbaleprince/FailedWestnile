<?php
include_once "include/database.php";
include_once "include/functions.php";

$username = validate($_POST['username']);
$passwd = validate($_POST['password']);

if (isset($_POST['delete'])) {
    if (empty($username && $passwd)) {
        header('Location:error.php');
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE username='$username' AND user_password='$passwd'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if($row['username'] === $username && $row['user_password'] === $passwd) {
                mysqli_query($conn,'DELETE FROM users WHERE id =5');
                header("Location:success.php");
                exit();
            }
            else {
                header("Location:error.php");
                exit();
            }
        }
        else {
            header("Location:error.php");
            exit();
        }
    }
}