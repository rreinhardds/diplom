<?php require_once 'vender/connect.php';?>
<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<style type="text/css">

    a.navbar-brand {
  white-space: normal;
  text-align: center;
  word-break: break-all;
  text-decoration: none;
}


.footer {
  position: absolute;
  bottom: 0;
  width: 99%;
  white-space: nowrap;
  line-height: 50px;
}

html {
  position: relative;
  min-height: 100%;

}


body {
    margin-bottom: 10%;


}


.containerr {
   

    margin-top:2%;
    max-width: 100%;
    background: #F8F9FD;
    background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgb(244, 247, 251) 100%);
    border-radius: 40px;
    padding: 25px 35px;
    border: 5px solid rgb(255, 255, 255);
    box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 30px 30px -20px;

}

.heading {
    margin-bottom: 3%;
    text-align: center;
    font-weight: 900;
    font-size: 18px;
    color: rgb(16, 137, 211);
    text-transform: uppercase;

}

.navbar{
  width: 99%;
  margin: auto;
}

.container-fluid{
    left: 100px;
    height: 50px;
    text-align: center;
    font-size: 25px;
}

ul {
  list-style: none;
  margin: 0;
  padding-left:;
}
a {text-decoration: none;}
.top-menu {position: relative;}
.top-menu:after, .submenu:after {
  content: "";
  display: table;
  
}
.top-menu > li {float: left;}
.top-menu > li > a {
  display: block;
  padding: 0 18px;height: 46px;line-height: 46px;
  font-size: 16px;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: #000;
  transition: .2s linear;
}
.top-menu > li > a:hover 
.dropdown:after {
  content: "\f107";
  
  margin-left: 10px;
  vertical-align: top;
}
.submenu, .submenu-standart {
  border-top: 1px solid #e5e5e5;
  box-shadow: 0 3px 5px 0 rgba(0,0,0,.07);
  background: white;
  padding: 25px 0;
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 5;
  opacity: 0;
  visibility: hidden;
  transform: translate3d(0,30px,0);
  transition: .5s ease-out;
  transform-origin: 0% 0%;
}

.submenu {width: 100%;}
.submenu-standart {
  min-width: 200px;
  padding: 10px 0;
}

.link-standart {position: relative;}
.top-menu > li:hover .submenu, .top-menu > li:hover .submenu-standart {
  opacity: 1;
  visibility: visible;
  transform: translate3d(0,0,0);
}

.submenu li a, .submenu-standart li a {
  display: block;
  padding: 5px 0;
  color: #666;
  font-size: 13px;
}

////

          .filmcontainer{


            padding-left: 2.5rem;
            border: 30px;
            align-items: center;
            overflow: visible;
            border-radius: 30px;
            margin: 5px;

        }  
.card {
    
    font-size: 21px;
    margin-top: 20px;
 border-radius: 30px;
border: 30px;
 background: #e3f2fd;
 border-color: #e3f2fd;
 position: relative;
}

.card::after {
    border: 30px;
 border-radius: 30px;
 transform: scale(0.8);
 filter: blur(25px);

border-color: #e3f2fd;
 transition: opacity .5s;
}

.card-info {

    padding: 2.5rem;
    text-align: center;
 border-radius: 30px;
 --color: #e3f2fd;
 border: 30px;
 background: var(--color);
 color: var(--color);
 justify-content: center;
 align-items: center;
 overflow: visible;
 border-radius: 30px;
}

.card .title {
 font-weight: bold;
 letter-spacing: .1em;
}

/*Hover*/
.card:hover::after {
    padding-left: 2.5rem;
 border-radius: 30px;
 opacity: 0;
}

.card:hover .card-info {
    padding-left: 2.5rem;
 border-radius: 30px;
 color: #000000;
 transition: color 1s;
}

///////////
.group {
border-radius: 30px;

 line-height: 28px;
 align-items: center;
 position: relative;
 max-width: 190px;
}

.input {
    margin-top: 5%;
    border-color: #21638A;
    width: auto;
    height: 40px;
    line-height: 28px;
  
    border-radius: 30px;
    background-color: #ffffff;
    color: #0d0c22;
    text-align: center; /* Добавьте это свойство, чтобы текст отображался по центру */
}
.iinput {
    border-color: #21638A;
   width: auto;
    height: 40px;
    line-height: 28px;
  
    border-radius: 15px;
    background-color: #ffffff;
    color: #0d0c22;
    text-align: center; /* Добавьте это свойство, чтобы текст отображался по центру */
}
.input::placeholder {
 color: #9e9ea7;
}
.inputt{
width: 10%;
text-decoration: none; 
 height: 40px;
margin-bottom: 30px;
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #21638A;
  background-color: #e3f2fd;
  border-color: #21638A;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
}
.inputt:hover:hover {
  background-color: #ffffff;
  color: #000;

}
.inputt:active {
  transform: translateY(-1px);
}
.ssilka {
              color: #21638A; 
              text-decoration: none; 
        }

.inputbutton{
    
    width: 20%;
text-decoration: none; 
 height: 30px;
 margin: 90px;
margin-bottom: 30px;
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #21638A;
  background-color: #e3f2fd;
  border-color: #21638A;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
}
table{
        margin-left: 2%;
    margin-top: 1%;
    margin-bottom: 2%;
  table-layout: fixed;
width: 97%;
  border-color: #000000;
  margin-top: 3%;
}
table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 3%
        }

        table, th, td {
            width: auto;
            border: 1px solid black;
            color: #000000;
            background: #e3f2fd;
            border-color: #000000;
            text-align: center;
        }

        th, td {
            padding: 8px;
            text-align: center;
        }


.button-container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.men {
    align-content: center;
    margin-left: 2%;
    margin-top: 1%;
    margin-bottom: 2%;
    width: 94%;
    text-align: center;
    background: #e3f2fd;
    color: #21638A;
    border-radius: 40px;
    border: 5px solid rgb(255, 255, 255);

    display: inline-block;
    flex-direction: row;
    border-color: #e3f2fd;
    justify-content: flex-start;
    padding: 10px;
}
.login-button {
    display: inline-block; /* изменено с 'block' на 'inline-block' чтобы кнопки располагались горизонтально */
    width: 15%;
    font-weight: bold;
    background: linear-gradient(45deg, rgb(16, 137, 211) 0%, rgb(18, 177, 209) 100%);
    color: white;
    padding-block: 15px;
    margin: 2px 5px; /* добавлено небольшое расстояние между кнопками */
    border-radius: 20px;
    box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 20px 10px -15px;
    border: none;
    transition: all 0.2s ease-in-out;
}
.sticky-col {
    position: sticky;
    left: 0;
    background-color: #f2f2f2;
}
</style>
<body>
<header>
         <nav class="navbar" style=" font-weight: 900;   border-radius: 30px; background-color: #e3f2fd; ">
            <div class="container-fluid" >

                <?php if(!empty($_SESSION['fio'])) :?>

                <ul class="top-menu">

  <li><a href=""><?php echo "".$_SESSION['fio'];?></a></li>

  <li><a href="glavnaya.php">Режим пользователя</a></li>
 <li><a href="uspev.php">Успеваемость</a></li>
<li class="link-standart"><a href="" class="dropdown dropdown-standart">Расписание</a>
    <ul class="submenu-standart">
      <li><a href="http://diary/raspisanie.php">Основное расписание</a></li>
      <li><a href="http://diary/izmvraspisanii.php">Изменения в расписании</a></li>
    </ul>
</li>
<li><a href="vender/logout.php">Выход</a></li>
</ul>

<script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('.select').change(function(){
        window.location.href = $(this).val();
    });
});
</script>
        </div>
        </nav>
    </header>
    <div class="container">
        <main role="main">
<div class="text-center">
<div class="containerr">
    <div class="heading"> Промежуточная успеваемость </div>

<div class="men">
    <?php

        
if (isset($_SESSION['id'])) {
    // Проверка, что в сессии установлен идентификатор пользователя
    $id_user = $_SESSION['id'];

    // Подготовленный запрос для проверки наличия пользователя в таблице parents
    $stmt = $dbh->prepare("SELECT * FROM parents WHERE id_user = :id_user");
    $stmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
    $stmt->execute();

    $parents = $stmt->fetchAll();

    if ($parents) {
        // Пользователь найден в таблице parents
        echo '
        <div class="button-container">
            <button id="showFormButton" class="login-button" style="margin-right: 5px;">Оценки</button>
            <button class="login-button" style="margin-right: 5px; display: none;" id="toggleFormButton">Свернуть форму</button>
            <button  id="showFormButtonn" class="login-button" style="margin-right: 5px;">Задолженности</button>
             <button class="login-button" style="margin-right: 5px; display: none;" id="toggleFormButtonn">Свернуть форму</button>
        </div>';
    } else {
        // Пользователь не найден в таблице parents
        echo '<a>Доступ запрещен к этой странице для вашей роли.</a>';
    }
} else {
    // Если идентификатор пользователя нет в сессии
    echo 'Ошибка: Идентификатор пользователя не установлен в сессии.';
}
?>
    <?php if(isset($_SESSION['message'])): ?>
        <div class="message-box">
            <?php echo $_SESSION['message']; ?>
        </div>
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>



<?php
if (isset($_SESSION['id'])) {
    $id_user = $_SESSION['id'];

    $stmt = $dbh->prepare("SELECT s.id, s.fio FROM students s INNER JOIN parents p ON s.id = p.id_student WHERE p.id_user = :id_user");
    $stmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
    $stmt->execute();

    $children = $stmt->fetchAll();

    if ($children) {
        echo '<form id="dataForm" method="post" style="display: none;" action="uspev.php">';
        echo '<select name="quarter" class="input">
    <option value="1" ' . (isset($_POST["quarter"]) && $_POST["quarter"] == '1' ? 'selected' : '') . '>1 четверть (01.09.2023 - 05.11.2023)</option>
    <option value="2" ' . (isset($_POST["quarter"]) && $_POST["quarter"] == '2' ? 'selected' : '') . '>2 четверть (06.11.2023 - 09.01.2024)</option>
    <option value="3" ' . (isset($_POST["quarter"]) && $_POST["quarter"] == '3' ? 'selected' : '') . '>3 четверть (10.01.2024 - 31.03.2024)</option>
    <option value="4" ' . (isset($_POST["quarter"]) && $_POST["quarter"] == '4' ? 'selected' : '') . '>4 четверть (01.04.2024 - 31.05.2024)</option>
    <option value="5" ' . (isset($_POST["quarter"]) && $_POST["quarter"] == '5' ? 'selected' : '') . '>1 Полугодие (01.09.2023 - 31.12.2023) для 10,11 классов</option>
    <option value="6" ' . (isset($_POST["quarter"]) && $_POST["quarter"] == '6' ? 'selected' : '') . '>2 Полугодие (01.01.2024 - 31.05.2024) для 10,11 классов</option>
</select>';
        echo ' <select name="selectedChild" class="input">';
        echo "<option value='' selected disabled>Выберите ребенка</option>";
        foreach ($children as $child) {
            echo '<option value="' . $child['id'] . '">' . $child['fio'] . '</option>';
        }
        echo '</select>';
        echo '<input type="submit" class="input" name="generate_table" value="OK">';  
        echo'</form>';
         if (isset($_POST["generate_table"])) { 

    $studentId = $child['id'];
    $quarter = $_POST['quarter'];
    $quarterDates = [
        1 => ['2023-09-01', '2023-11-05'],
        2 => ['2023-11-06', '2024-01-09'],
        3 => ['2024-01-10', '2024-03-31'],
        4 => ['2024-04-01', '2024-05-31'],
        5 => ['2023-09-01', '2023-12-31'],
        6 => ['2024-01-01', '2024-05-31']
    ];
     $startDate = $quarterDates[$quarter][0];
    $endDate = $quarterDates[$quarter][1];

    $stmt = $dbh->prepare("SELECT students.id_class, class.name AS class_name FROM students JOIN class ON students.id_class = class.id WHERE students.id = :student_id");
    $stmt->bindParam(':student_id', $studentId);
    $stmt->execute();
    $studentClass = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($studentClass) {
        // Получение предметов ученика
        $stmt = $dbh->prepare("SELECT i.id AS item_id, i.name AS item_name
                               FROM item i
                               WHERE i.id_class = :class_id");
        $stmt->bindParam(':class_id', $studentClass['id_class']);
        $stmt->execute();
        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Запрос для выбранного диапазона дат
        $stmt = $dbh->prepare("SELECT DATE_FORMAT(j.date, '%d.%m.%Y') AS formatted_date, j.id AS job_id, i.id AS item_id
                               FROM job j
                               JOIN item i ON i.id = j.id_item
                               WHERE j.id_class = :id_class AND j.date BETWEEN :start_date AND :end_date
                               ORDER BY j.date ASC");
        $stmt->bindParam(':id_class', $studentClass['id_class']);
        $stmt->bindParam(':start_date', $startDate);
        $stmt->bindParam(':end_date', $endDate);
        $stmt->execute();
        $jobMarks = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Формирование таблицы оценок

    // Измените запрос для использования выбранного диапазона дат
    $stmt = $dbh->prepare("SELECT  DATE_FORMAT(j.date, '%d.%m.%Y') AS formatted_date, j.id AS job_id, i.id AS item_id
                           FROM job j
                           JOIN item i ON i.id = j.id_item
                           WHERE j.id_class = :id_class AND j.date BETWEEN :start_date AND :end_date
                           ORDER BY j.date ASC");
    $stmt->bindParam(':id_class', $studentClass['id_class']);
    $stmt->bindParam(':start_date', $startDate);
    $stmt->bindParam(':end_date', $endDate);
    $stmt->execute();
    $jobMarks = $stmt->fetchAll(PDO::FETCH_ASSOC);
$marksTable = []; // Массив для хранения оценок по комбинации даты и предмета

// Собираем оценки для каждой комбинации дата-предмет
foreach ($jobMarks as $jobMark) {
    $stmt = $dbh->prepare("SELECT i.id AS item_id, i.name AS item_name, COALESCE(m.mark, 0) AS mark
        FROM item i
        LEFT JOIN marks m ON m.id_item = i.id AND m.id_job = :jobId AND m.id_student = :studentId
        WHERE i.id = :itemId");
    $stmt->execute(['jobId' => $jobMark['job_id'], 'studentId' => $studentId, 'itemId' => $jobMark['item_id']]);
    $mark = $stmt->fetch(PDO::FETCH_ASSOC);

    $marksTable[$jobMark['formatted_date']][$mark['item_id']] = $mark['mark']; // Сохраняем оценку по дате и предмету
}

   echo '<div style="overflow-x:auto;">'; // Добавляем горизонтальную прокрутку
echo "<table>";
echo "<tr>";
echo "<th class='sticky-col' style='position: sticky; left: 0; background-color: #f2f2f2;'>Предметы</th>";

    // Отображаем уникальные даты в заголовках столбцов
    $uniqueDates = array_unique(array_column($jobMarks, 'formatted_date'));
    foreach ($uniqueDates as $uniqueDate) {
        echo "<th>{$uniqueDate}</th>";
    }

    echo "<th>Средний балл</th>";
    echo "</tr>";

  foreach ($items as $item) {
    echo "<tr>";
    echo "<td  style='position: sticky; left: 0; background-color: #f2f2f2; '>{$item['item_name']}</td>";

    foreach ($uniqueDates as $uniqueDate) {
        echo "<td>";
        if (isset($marksTable[$uniqueDate][$item['item_id']])) {
            echo $marksTable[$uniqueDate][$item['item_id']];
        }
        echo "</td>";
    }

    $totalMarks = array_sum(array_column($marksTable, $item['item_id'])); // Суммируем оценки для данного предмета
    $totalCount = count(array_filter(array_column($marksTable, $item['item_id']), 'is_numeric')); // Считаем количество оценок

    $averageMark = $totalCount > 0 ? $totalMarks / $totalCount : 0;

        echo "<td>" . number_format($averageMark, 2) . "</td>";
        echo "</tr>";

    }
}
    echo "</table>";
}
} else {
    echo "Для формирования таблицы необходимо выбрать четверть.";
}
}
        echo '</form>';

?>

<?php

echo "<form action='uspev.php' id='studentsTable' style='display:none;' method='post'>";
if (isset($_SESSION['id'])) {
    $id_user = $_SESSION['id'];

    $stmt = $dbh->prepare("SELECT s.id, s.fio FROM students s INNER JOIN parents p ON s.id = p.id_student WHERE p.id_user = :id_user");
    $stmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
    $stmt->execute();

    $children = $stmt->fetchAll();
    echo ' <select name="selectedChild" class="input">';
        echo "<option value='' selected disabled>Выберите ребенка</option>";
        foreach ($children as $child) {
            echo '<option value="' . $child['id'] . '">' . $child['fio'] . '</option>';
        }
        echo '</select>';
        echo '<input type="submit" class="input" name="generate_tablee" value="OK">';  
        echo'</form>';
}
else{

echo'хз';
}
if (isset($_POST["generate_tablee"]) && isset($_POST["selectedChild"])) {
    $selectedChildId = $_POST["selectedChild"];

    $stmt = $dbh->prepare("SELECT j.id, j.date, j.id_item, j.id_typework, j.description, wt.name AS typework_name, i.name AS item_name, m.mark
                                    FROM job j 
                                    INNER JOIN students s ON j.id_class = s.id_class 
                                    INNER JOIN worktype wt ON j.id_typework = wt.id 
                                    INNER JOIN item i ON j.id_item = i.id
                                    LEFT JOIN marks m ON m.id_job = j.id AND m.id_student = s.id
                                    WHERE s.id = :student_id
                                    AND m.mark IS NULL");
    $stmt->execute(['student_id' => $selectedChildId]);

    // Создание таблицы для отображения данных
    echo '<table>';
    echo '<tr>';
    echo '<th>Дата</th>';
    echo '<th>Предмет</th>';
    echo '<th>Вид работы</th>';
    echo '<th>Задание</th>';
    echo '<th>Оценка</th>';
    echo '</tr>';

    // Отображение данных из запроса в таблице
    foreach ($stmt as $row) {
        echo '<tr>';
        echo '<td>' . $row['date'] . '</td>';
        echo '<td>' . $row['item_name'] . '</td>';
        echo '<td>' . $row['typework_name'] . '</td>';
        echo '<td>' . $row['description'] . '</td>';
        echo "<td>" . ($row['mark'] ?? 'N/A') . "</td>";
        echo '</tr>';
    }

    echo '</table>';
}

?>


            <?php else:
                echo '<h2>Вы что хакер?</h2>';
                echo '<a class="ssilka inputbutton" style="padding:1%;" href="Avtoriz.php">Вернуться</a>';
            ?>

        <?php endif ?>
                
        

</div>
        </main>

</div>

<script>
    document.getElementById('showFormButtonn').addEventListener('click', function() {
        document.getElementById('studentsTable').style.display = 'block';
        document.getElementById('toggleFormButtonn').style.display = 'block';
        this.style.display = 'none';
    });

    document.getElementById('toggleFormButtonn').addEventListener('click', function() {
        document.getElementById('studentsTable').style.display = 'none';
        document.getElementById('toggleFormButtonn').style.display = 'none';
        document.getElementById('showFormButtonn').style.display = 'block';
    });
</script>
<script>
    document.getElementById('showFormButton').addEventListener('click', function() {
        document.getElementById('dataForm').style.display = 'block';
        document.getElementById('toggleFormButton').style.display = 'block';
        this.style.display = 'none';
    });

    document.getElementById('toggleFormButton').addEventListener('click', function() {
        document.getElementById('dataForm').style.display = 'none';
        document.getElementById('toggleFormButton').style.display = 'none';
        document.getElementById('showFormButton').style.display = 'block';
    });
</script>
<script >
    // После загрузки страницы
document.addEventListener('DOMContentLoaded', function() {
    // Поиск элемента сообщения
    var messageBox = document.querySelector('.message-box');

    // Если сообщение найдено
    if (messageBox) {
        // Показать сообщение

        // Таймер на скрытие сообщения через 10 секунд
        setTimeout(function() {
            // Скрыть сообщение
            messageBox.style.display = 'none';
        }, 10000); // 10 секунд в миллисекундах
    }
});
</script>
<script>
    document.getElementById('showFormButton').addEventListener('click', function() {
        document.getElementById('dataForm').style.display = 'block';
    });
</script>

    <footer class="border-top footer text-muted">
        <div class="container"><hr style="opacity: 30%;">
         
            &copy; 2024 - eChronicle
        </div>
    </footer>
</body>
</html>