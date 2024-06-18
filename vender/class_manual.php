<?php require_once 'connect.php';?>
<?php session_start();?>
<?php
// Assuming you have a database connection established already

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['teacher_name']) && isset($_POST['class_name'])) {
        $teacherId = $_POST['teacher_name'];
        $classId = $_POST['class_name'];

        // Perform database insertion
        $stmt_insert = $dbh->prepare("INSERT INTO manual (id_teacher, id_class) VALUES (:id_teacher, :id_class)");
        $stmt_insert->bindParam(':id_teacher', $teacherId);
        $stmt_insert->bindParam(':id_class', $classId);
        if ($stmt_insert->execute()) {
            // Data inserted successfully
           $_SESSION['message'] = "Успешно!";
        header('Location: ../class_ruk.php');
        } else {
            // Error inserting data
            $_SESSION['message'] = "Ошибка!";
        header('Location: ../class_ruk.php');
        }
    } else {
        // Handle missing data
         $_SESSION['message'] = "Выберите данные!";
        header('Location: ../class_ruk.php');
    }
} else {
    // Handle invalid request method
    $_SESSION['message'] = "Неверный метод запроса!";
        header('Location: ../class_ruk.php');
}
?>