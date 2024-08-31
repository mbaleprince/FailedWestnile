<?php
include_once "include/database.php";
include_once "include/functions.php";

if (isset($_POST['reset'])) {
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($email)) {
        header('Location:index.php');
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row["email"] === $email) {
                $userid = encrypt($row["id"]);
                #SEND EMAIL
                $message = "Recover account";
                $to=$email;
                $subject="Recover account";
                $from = 'accounts@westnile.com';
                $body = ' Please Click On this link <a href="recover.php">recover.php?reset='.$userid.'&password='.$password.'</a>to reset your password.';
                $headers = "From:".$from;
                mail($to,$subject,$body,$headers);
                echo 'userid\n';
                echo $userid;
                # SEND TOAST
            }
            else {
                header("Location:reset.php?error=empty");
                exit();
            }
        }
    }
}
if(isset($_GET['reset']) && isset($_GET['password'])) {
    $id = decrypt($_GET['reset']);
    $password = validate($_GET['password']);
    $sql = "SELECT * FROM users WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row["id"] === $id) {
            $update = "UPDATE users SET user_password = '$password' WHERE id='$id'";
            mysqli_query($conn, $update);
        }
        else {
            header("Location:reset.php?error=empty");
            exit();
        }
    }
    else {
        header("Location:reset.php?error=empty");
        exit();
    }
}