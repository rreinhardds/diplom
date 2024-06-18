<?php
require_once 'connect.php';
session_start();

// Получаем данные из формы
$type_work = $_POST['type_work'];
$id_class = $_POST['id_class'];
$teacher_id = $_POST['teacher_id'];
$description = $_POST['description'];
$date = $_POST['date'];


$fio = $_SESSION['fio'];

// Запрос для выбора ID учителя по имени из таблицы 'teachers'
$query_teacher = "SELECT id FROM teachers WHERE fio = :fio";
$stmt_teacher = $dbh->prepare($query_teacher);
$stmt_teacher->bindParam(':fio', $fio, PDO::PARAM_STR);
$stmt_teacher->execute();
$row_teacher = $stmt_teacher->fetch(PDO::FETCH_ASSOC);

if ($row_teacher) {
    $teacher_id = $row_teacher['id'];
    echo "ID учителя '$fio': $teacher_id<br>";

    // Запрос для выбора ID элемента, связанного с классом и учителем
    $query_item = "SELECT id,name FROM item WHERE id_class = :id_class and id_teacher = :teacher_id";
    $stmt_item = $dbh->prepare($query_item);
    $stmt_item->bindParam(':id_class', $id_class, PDO::PARAM_INT);
    $stmt_item->bindParam(':teacher_id', $teacher_id, PDO::PARAM_INT);
    $stmt_item->execute();
    $row_item = $stmt_item->fetch(PDO::FETCH_ASSOC);


    if ($row_item) {
        $item_id = $row_item['id'];
        $item_name = $row_item['name'];

        // Вставляем данные в таблицу 'job'
        $insert_query = "INSERT INTO job (id_class, id_teacher, id_item, id_typework, description, date) 
                        VALUES (:id_class, :teacher_id, :item_id, :type_work, :description, :date)";
        $insert_stmt = $dbh->prepare($insert_query);
        $insert_stmt->bindParam(':id_class', $id_class, PDO::PARAM_INT);
        $insert_stmt->bindParam(':teacher_id', $teacher_id, PDO::PARAM_INT);
        $insert_stmt->bindParam(':item_id', $item_id, PDO::PARAM_INT);
        $insert_stmt->bindParam(':type_work', $type_work, PDO::PARAM_STR); // Assuming type_work is a string
        $insert_stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $insert_stmt->bindParam(':date', $date, PDO::PARAM_STR); // Assuming date is a string

        if ($insert_stmt->execute()) {
           $_SESSION['success_message'] = "Task successfully added!";
    header("Location: ../gulnal.php?id_class={$id_class}&teacher_id={$teacher_id}&item_id={$item_name}");

        } else {
            echo "Ошибка при добавлении записи.";
        }
    } else {
        echo "Нет элемента, связанного с предоставленным ID класса и учителем.";
    }
} else {
    echo "Учитель с именем '$fio' не найден.";
}
?>