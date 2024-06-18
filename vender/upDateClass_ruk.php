<?php
require_once 'connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Перебираем каждую запись и обновляем только те, которые были изменены
    foreach ($_POST['submit'] as $manualId => $submitValue) {
        $teacherId = $_POST['teacher_id'][$manualId];
        $classId = $_POST['class_id'][$manualId];

        // Обновляем информацию в базе данных
        $stmt = $dbh->prepare("UPDATE manual SET id_teacher = :teacher_id, id_class = :class_id WHERE id = :manual_id");
        $stmt->bindParam(':teacher_id', $teacherId);
        $stmt->bindParam(':class_id', $classId);
        $stmt->bindParam(':manual_id', $manualId);

        if ($stmt->execute()) {
            $_SESSION['message'] = "Информация  успешно обновлена!";
        } else {
            $_SESSION['message'] = "Произошла ошибка при обновлении информации для записи.";
        }
    }

    header('Location: ../class_ruk.php');
    exit();
}
?>