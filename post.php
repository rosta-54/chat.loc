<?php
require_once 'config.php';
$message = $_POST['text'];
$time =  time();
$query = "INSERT INTO`chat`(`message`, `time`) VALUES ('$message', $time)";
$result = mysqli_query($connection, $query);
header('Location:/first.loc/chat.loc/chat.loc/');
