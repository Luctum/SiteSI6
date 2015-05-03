<?php 
session_start();
if(!isset($_SESSION['id'])){
	header('location:' . WEBROOT . "login.php")
}
?>