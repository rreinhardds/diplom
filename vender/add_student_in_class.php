
<?php require_once 'connect.php';?>
<?php session_start();?>
<?php


    // Получение данных из формы
    $fio = $_POST['fio'];
    $id_class = $_POST['id_class'];
    
    // Вставка записи в таблицу students
    $stmt = $dbh->prepare("INSERT INTO students (id_class, id_rule, fio) VALUES (:id_class, 4, :fio)");
    $stmt->bindParam(':id_class', $id_class);
    $stmt->bindParam(':fio', $fio);
    
    if ($stmt->execute()) {
         $_SESSION['message'] = "Ученик успешно добавлен в класс!";
    header('Location: ../edit_class.php');
    exit();
    } else {
        echo "Произошла ошибка при добавлении студента в класс.";
       var_dump($_POST);
    }

?>