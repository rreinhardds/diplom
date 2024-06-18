<?php require_once 'connect.php';?>
<?php session_start();?>
<?php
$id = $_REQUEST['id'];
$delmovie=$dbh->prepare("DELETE FROM users WHERE id=$id");
$delmovie->execute();

header('Location:../search_users.php');

?>