<?php 
session_start();
if(isset($_SESSION['user'])){
	echo("Welcome ".$_SESSION['user']);
}
else{
	echo("Not logged in. Log in to continue");
}
?>