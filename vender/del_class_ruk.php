<?php
require_once 'connect.php';
session_start();

// Получение данных из формы
$id = $_POST['id']; // Assuming the form sends an 'id' field

// Удаление записи из таблицы manual
$stmt = $dbh->prepare("DELETE FROM manual WHERE id = :id");
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    $_SESSION['message'] = "Запись успешно удалена!";
    header('Location: ../class_ruk.php');
    exit();
} else {
    echo "При удалении произошла ошибка.";
}
?>