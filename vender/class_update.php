<?php require_once 'connect.php';?>
<?php session_start();?>
<?php
// Получение данных из AJAX-запроса
$id_class = $_POST['id_class'];
$id = $_POST['id'];

// SQL запрос для обновления класса студента
$sql = $dbh->prepare("UPDATE students SET id_class = :id_class WHERE id = :id");
$sql->bindParam(":id_class", $id_class);
$sql->bindParam(":id", $id);

if ($sql->execute()) {
    echo "Класс студента успешно обновлен";
} else {
    echo "Ошибка при обновлении класса студента: " . $dbh->errorInfo()[2];
}
?>