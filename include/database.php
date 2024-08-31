<?php
$conn = mysqli_connect('localhost', 'prince', '1234567890', 'westnile');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}