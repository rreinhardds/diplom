<?php require_once 'connect.php';?>
<?php session_start();?>

<?php
$login = $_POST["login"];
$password = $_POST["password"];

$sql = $dbh->prepare("SELECT id, login, fio, rule FROM users WHERE login = :login AND password = :password");
$sql->execute(array('login' => $login, 'password' => $password));
$array = $sql->fetch(PDO::FETCH_ASSOC);

if ($array["id"] > 0 && $array["rule"] > 0) {

  $_SESSION['id'] = $array["id"]; // Сохраняем ID пользователя в сессии
  $_SESSION['rule'] = $array["rule"];
  $_SESSION['fio'] = $array["fio"];

  header('Location: ../glavnaya.php');
}

else {
  header('Location: ../Avtoriz.php');
}
?>