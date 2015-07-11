<?php
session_start();
if(isset($_SESSION['email']))
{
$email = $_SESSION['email'];
$u_id = $_SESSION['u_id'];
$type = $_SESSION['type'];
}
?>
