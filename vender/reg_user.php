<?php require_once 'connect.php';?>
<?php session_start();?>


<?php

	$fio = $_REQUEST['fio'];
	$login=$_REQUEST['login'];
	$password=$_REQUEST['password'];
	$rule=$_REQUEST['rule'];
	
$check_query = $dbh->prepare("SELECT COUNT(*) as count FROM users WHERE login = :login");
$check_query->bindParam(":login", $login);
$check_query->execute();
$count = $check_query->fetchColumn();
if ($count > 0) {
    $_SESSION['message'] = "Пользователь с таким логином уже существует. Пожалуйста, выберите другой логин.";
    header('Location: ../new_User.php');
    exit();
} else {


	$sql=$dbh->query("SELECT * FROM rule WHERE name='$rule';");

	$rule_id;


	foreach($sql as $row){
	  $rule_id=$row['id'];
	  echo $row['id'];
	}

	$query=$dbh->prepare("INSERT INTO users (id, login, password, rule, fio) VALUES (null, :login, :password, :rule, :fio)");
	$query->bindParam(":login", $login);
	  $query->bindParam(":password", $password);
	  $query->bindParam(":rule", $rule_id);
	  $query->bindParam(":fio", $fio);
	  $query->execute();


	  
	  	header('Location:../search_users.php');
}
	

	











?>

