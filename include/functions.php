<?php
function validate($data) {
    $data = stripslashes($data);
    $data = trim($data);
    $data = htmlspecialchars($data);
    $db = mysqli_connect('localhost', 'prince', '1234567890', 'westnile');
    if (mysqli_connect_errno()) {
        die('Error'. mysqli_connect_error());
    }
    $data = mysqli_real_escape_string($db, $data);
    return $data;
}

function encrypt($data) {
    $cipher = "AES-128-CTR";
    $ivlen = openssl_cipher_iv_length($cipher);
    $options = 0;
    $iv = '1234567891011121';
    $key = "nakintu";
    $encryption = openssl_encrypt($data,$cipher, $key, $options, $iv);
    return $encryption;
}

function decrypt($data) {
    $cipher = "AES-128-CTR";
    $ivlen = openssl_cipher_iv_length($cipher);
    $options = 0;
    $iv = '1234567891011121';
    $key = "nakintu";
    $decrypt = openssl_decrypt($data, $cipher, $key, $options, $iv);
    return $decrypt;
}