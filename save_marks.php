<?php
require_once 'vender/connect.php';
$id_class = $_POST['id_class'];
$id_item = $_POST['id_item'];
$id_job = $_POST['id_job'];
$id_teacher = $_POST['id_teacher'];
$marks = $_POST['marks'];
$markkkid = $_POST['markkkid'];
$id_worktype = $_POST['id_worktype'];

$stmt_update_marks = $dbh->prepare("UPDATE marks SET mark = :mark WHERE id_job = :id_job AND id_student = :id_student");

foreach ($marks as $student_id => $mark) {
       $stmt_check_mark = $dbh->prepare("SELECT id FROM marks WHERE id_student = :id_student AND id_job = :id_job");
    $stmt_check_mark->bindValue(':id_student', $student_id);
    $stmt_check_mark->bindValue(':id_job', $id_job);
    $stmt_check_mark->execute();

    if ($stmt_check_mark->rowCount() > 0) {
        $stmt_update_marks->bindValue(':mark', $mark);
        $stmt_update_marks->bindValue(':id_job', $id_job);
        $stmt_update_marks->bindValue(':id_student', $student_id);

        $stmt_update_marks->execute();
    }else {
        // SQL запрос для добавления новой оценки
        $stmt_insert_mark = $dbh->prepare("INSERT INTO marks (id_student, id_item, id_teacher, id_worktype, id_job, mark) VALUES (:id_student, :id_item, :id_teacher, :id_worktype, :id_job, :mark)");

     

        // Привязываем значения к плейсхолдерам в запросе для добавления
        $stmt_insert_mark->bindValue(':id_student', $student_id);
        $stmt_insert_mark->bindValue(':id_item', $id_item);
        $stmt_insert_mark->bindValue(':id_teacher', $id_teacher);
        $stmt_insert_mark->bindValue(':id_worktype', $id_worktype);
        $stmt_insert_mark->bindValue(':id_job', $id_job);
        $stmt_insert_mark->bindValue(':mark', $mark);


        $stmt_insert_mark->execute();


        
    }
}

// Перенаправляем пользователя на страницу с заданиями
header("Location: sent_dz.php?id=$id_job&id_class=$id_class&item_id=$id_item&teacher_id=$id_teacher");

?>
