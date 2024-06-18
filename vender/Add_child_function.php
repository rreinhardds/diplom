<?php require_once 'connect.php';?>
<?php session_start();?>
<?php

	$id_user =$_REQUEST['user'];
	$id_student =$_REQUEST['my-browser'];

	$sql=$dbh->query("SELECT * FROM students where fio='$id_student';");

	$users_studentid;
	echo "$id_user";
echo "$id_student";


	foreach($sql as $row){
	  $users_studentid=$row['id'];
	  echo $row['id'];
	}

	$query=$dbh->prepare("INSERT INTO parents (id, id_user, id_student ) VALUES (null, :id_user, :id_student)");
	$query->bindParam(":id_user", $id_user);
$query->bindParam(":id_student", $users_studentid);
	  $query->execute();


	  header('Location:../search_users.php');















?>