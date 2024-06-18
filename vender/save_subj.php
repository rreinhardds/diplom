<?php
require_once 'connect.php';
session_start();


    // Получение данных из формы
    $name = $_POST['name'];
    $id_teacher = $_POST['id_teacher'];
    $id_class = $_POST['id_class'];

  
        // Подготовка SQL-запроса для вставки данных
        $stmt = $dbh->prepare("INSERT INTO item (name, id_teacher, id_class) VALUES (:name, :id_teacher, :id_class)");

        // Привязка параметров
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':id_teacher', $id_teacher);
        $stmt->bindParam(':id_class', $id_class);


 if ($stmt->execute()) {
    $_SESSION['message'] = "Запись успешно добавлена!";
    header('Location: ../subject.php');
    exit();
} else {
  $_SESSION['message'] = "При добавлении произошла ошибка";
     header('Location: ../subject.php');
}

?>