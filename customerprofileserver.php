<?php
session_start();
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'eatlk');
?>