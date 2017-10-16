<?php
include 'connect.php';
$message = $_POST['messages'];
$connect->exec("INSERT INTO messages(message) VALUES('$message')");

echo '<div class="message">' . $message . '</div>';