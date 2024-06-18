<?php require_once 'connect.php';?>
<?php session_start();?>
<?php
if (isset($_POST['generate_report'])) {
    // Retrieve the selected class and subject IDs from the form submission
    $selected_ids = explode('-', $_POST['class_subject']);
    $selected_class_id = $selected_ids[0];
    $selected_subject_id = $selected_ids[1];

    // Query to fetch all students in the selected class
    $stmt_students = $dbh->prepare("SELECT id, fio FROM students WHERE id_class = :class_id");
    $stmt_students->bindParam(':class_id', $selected_class_id, PDO::PARAM_INT);
    $stmt_students->execute();
    $students = $stmt_students->fetchAll(PDO::FETCH_ASSOC);

    // Query to fetch marks for all students in the selected class and subject
    $stmt_marks = $dbh->prepare("SELECT s.fio AS student_name, m.mark
                                 FROM marks m
                                 JOIN students s ON m.id_student = s.id
                                 WHERE s.id_class = :class_id AND m.id_item = :subject_id");
    $stmt_marks->bindParam(':class_id', $selected_class_id, PDO::PARAM_INT);
    $stmt_marks->bindParam(':subject_id', $selected_subject_id, PDO::PARAM_INT);
    $stmt_marks->execute();
    $marks = $stmt_marks->fetchAll(PDO::FETCH_ASSOC);

    // Display student grades in a table
    echo "<table border='1'>";
    echo "<tr><th>ФИО ученика</th><th>Отметка</th></tr>";

    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . $student['fio'] . "</td>";
        $student_mark = null;
        foreach ($marks as $mark) {
            if ($mark['student_name'] === $student['fio']) {
                $student_mark = $mark['mark'];
                break;
            }
        }
        echo "<td>" . ($student_mark ?? 'Нет данных') . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Какие-то проблемы при генерации отчета. Попробуйте еще раз.";
}
?>