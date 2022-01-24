<?php
session_start();
$_SESSION['logged_user_id']='';
header('location: index.php');