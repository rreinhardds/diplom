<?php require_once 'connect.php';?>
<?php session_start();?>

<?php
$id = $_REQUEST['id'];
$fio= $_POST['fio'];
$login = $_POST["login"];
$rule = $_POST["rule"];
$password = $_POST["password"];

$sql = $dbh->prepare("UPDATE users SET fio = :fio, login =:login, password =:password, rule=:rule WHERE users.id= $id ");
$sql->bindParam(":fio", $fio);
$sql->bindParam(":login", $login);
$sql->bindParam(":password", $password);
$sql->bindParam(":rule", $rule);
$sql->execute();


  header('Location: ../search_users.php');

?>