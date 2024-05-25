<?php
$conn = mysqli_connect('localhost', 'root', '', 'to_late_web');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>