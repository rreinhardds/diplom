<?php require_once 'connect.php'; ?>
<?php session_start(); ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];

    // Подготовка и выполнение подготовленного запроса на проверку существования данных
    $checkSql = $dbh->prepare("SELECT COUNT(*) FROM class WHERE name = :name");
    $checkSql->bindParam(':name', $name);
    $checkSql->execute();
    
    $count = $checkSql->fetchColumn();
    
    if ($count > 0) {
        // Если класс с таким именем уже существует
        $_SESSION['message'] = "Такой класс уже существует в базе данных! 😟";
        header('Location: ../edit_class.php');
    } else {
        // Если класс с таким именем не существует, добавляем новый класс
        $insertSql = $dbh->prepare("INSERT INTO class (name) VALUES (:name)");
        $insertSql->bindParam(':name', $name);

        if ($insertSql->execute()) {
            $_SESSION['message'] = "Новый класс успешно добавлен в базу данных! 😊";
            header('Location: ../edit_class.php');
        } else {
            echo "Ошибка: " . $insertSql->errorCode() . "<br>" . implode("<br>", $insertSql->errorInfo());
        }
    }
}

?>