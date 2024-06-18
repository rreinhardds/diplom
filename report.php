<?php require_once 'vender/connect.php';?>
<?php session_start();


?>

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
    width: 30%;
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

table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 3%
        }

        table, th, td {
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
    width: auto;
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

</style>
<body>
<header>
          <nav class="navbar" style=" font-weight: 900;   border-radius: 30px; background-color: #e3f2fd; ">
            <div class="container-fluid" >

                <?php if(!empty($_SESSION['fio'])) :?>
                <?php if($_SESSION['rule'] == 2) :?>
                    <ul class="top-menu">

                        <li><a href=""><?php echo "".$_SESSION['fio'];?></a></li>
                        <li><a href="glavnaya.php">Режим пользователя</a></li>
                        <li><a href="glavnaya_teacher.php">Журналы</a></li>
                        <li><a href="report.php">Отчетность</a></li>
                        <li class="link-standart">
                            <a href="" class="dropdown dropdown-standart">Расписание</a>
                            <ul class="submenu-standart">
                                <li><a href="http://diary/raspisanie.php">Основное расписание</a></li>
                                <li><a href="http://diary/izmvraspisanii.php">Изменения в расписании</a></li>
                            </ul>
                        </li>
                        <li><a href="vender/logout.php">Выход</a></li>
                    </ul>
                <?php else: ?>
                    <ul class="top-menu">
                        <li><a href=""><?php echo "".$_SESSION['fio'];?></a></li>
                        <li><a href="glavnaya.php">Режим пользователя</a></li>
                        <li class="link-standart">
                            <a href="" class="dropdown dropdown-standart">Расписание</a>
                            <ul class="submenu-standart">
                                <li><a href="http://diary/raspisanie.php">Основное расписание</a></li>
                                <li><a href="http://diary/izmvraspisanii.php">Изменения в расписании</a></li>
                            </ul>
                        </li>
                        <li><a href="vender/logout.php">Выход</a></li>
                    </ul>
                <?php endif; ?>




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
    <div class="heading"> Отчетность </div>

<div class="men">
    <?php
    if ($_SESSION['rule'] !== '2') {
        echo '<a>Доступ запрещен к этой странице для вашей роли.</a>';
    } else {
        echo '
        <div class="button-container">
<button id="showFormButton" class="login-button" style="margin-right: 5px;">Журнал классного руководителя</button>
            <button class="login-button" style="margin-right: 5px; display: none;" id="toggleFormButton">Свернуть форму</button>
 <button id="showFormButtonn" class="login-button" style="margin-right: 5px;">Журнал предмета</button>
 <button class="login-button" style="margin-right: 5px; display: none;" id="toggleFormButtonn">Свернуть форму</button>


        </div>';
echo '<form id="dataForm" style="display: none;" method="post" action="report.php">';

echo '<select name="quarter" class="input">
    <option value="1" ' . (isset($_POST["quarter"]) && $_POST["quarter"] == '1' ? 'selected' : '') . '>1 четверть (01.09.2023 - 05.11.2023)</option>
    <option value="2" ' . (isset($_POST["quarter"]) && $_POST["quarter"] == '2' ? 'selected' : '') . '>2 четверть (06.11.2023 - 09.01.2024)</option>
    <option value="3" ' . (isset($_POST["quarter"]) && $_POST["quarter"] == '3' ? 'selected' : '') . '>3 четверть (10.01.2024 - 31.03.2024)</option>
    <option value="4" ' . (isset($_POST["quarter"]) && $_POST["quarter"] == '4' ? 'selected' : '') . '>4 четверть (01.04.2024 - 31.05.2024)</option>
    <option value="5" ' . (isset($_POST["quarter"]) && $_POST["quarter"] == '5' ? 'selected' : '') . '>1 Полугодие (01.09.2023 - 31.12.2023) для 10,11 классов</option>
    <option value="6" ' . (isset($_POST["quarter"]) && $_POST["quarter"] == '6' ? 'selected' : '') . '>2 Полугодие (01.01.2024 - 31.05.2024) для 10,11 классов</option>
</select>';
// First, find the teacher's ID based on their full name
$stmt_teacher_id = $dbh->prepare("SELECT id FROM teachers WHERE fio = :teacher_fio");
$stmt_teacher_id->bindParam(':teacher_fio', $_SESSION['fio'], PDO::PARAM_STR);
$stmt_teacher_id->execute();
$teacher_id = $stmt_teacher_id->fetchColumn();

// Fetch the items related to the teacher's class
$stmt_items = $dbh->prepare("SELECT i.id AS item_id, i.name AS item_name
                            FROM item i
                            INNER JOIN manual m ON i.id_class = m.id_class
                            WHERE m.id_teacher = :teacher_id");
$stmt_items->bindParam(':teacher_id', $teacher_id, PDO::PARAM_INT);
$stmt_items->execute();
$items = $stmt_items->fetchAll(PDO::FETCH_ASSOC);

echo '<select name="item_id" class="input">';
echo '<option value="" selected disabled>Дисциплина</option>';

foreach ($items as $item) {
    echo '<option value="' . $item["item_id"] . '">' . $item["item_name"] . '</option>';
}

echo '</select>';

echo '<input type="submit"  class="input" name="generate_report" value="Сформировать">';
echo '</form>';

if (isset($_POST['generate_report'])) {
            $quarterDates = [
        1 => ['2023-09-01', '2023-11-05'],
        2 => ['2023-11-06', '2024-01-09'],
        3 => ['2024-01-10', '2024-03-31'],
        4 => ['2024-04-01', '2024-05-31'],
        5 => ['2023-09-01', '2023-12-31'],
        6 => ['2024-01-01', '2024-05-31']
    ];
    $selected_item_id = $_POST['item_id'];
    $selected_quarter = $_POST['quarter'];
    $start_date = $quarterDates[$selected_quarter][0];
    $end_date = $quarterDates[$selected_quarter][1];
    // First, find the teacher's ID based on their full name
    $stmt_teacher_id = $dbh->prepare("SELECT id FROM teachers WHERE fio = :teacher_fio");
    $stmt_teacher_id->bindParam(':teacher_fio', $_SESSION['fio'], PDO::PARAM_STR);
    $stmt_teacher_id->execute();
    $teacher_id = $stmt_teacher_id->fetchColumn();

    // Fetch the student names related to the teacher
    $stmt_students = $dbh->prepare("SELECT s.fio as student_name
                                    FROM students s
                                    INNER JOIN manual m ON s.id_class = m.id_class
                                    INNER JOIN teachers t ON m.id_teacher = t.id
                                    WHERE t.id = :teacher_id");
    $stmt_students->bindParam(':teacher_id', $teacher_id, PDO::PARAM_INT);
    $stmt_students->execute();
    $students = $stmt_students->fetchAll(PDO::FETCH_ASSOC);

    // Fetch all dates where there are assignments for the selected item
    $stmt_dates = $dbh->prepare("SELECT DISTINCT DATE_FORMAT(j.date, '%d.%m.%Y') AS formatted_date
                                 FROM job j
                                 WHERE j.id_item = :selected_item_id AND j.date BETWEEN :start_date AND :end_date");
    $stmt_dates->bindParam(':selected_item_id', $selected_item_id);
    $stmt_dates->bindParam(':start_date', $start_date);
    $stmt_dates->bindParam(':end_date', $end_date);
    $stmt_dates->execute();
    $dates = $stmt_dates->fetchAll(PDO::FETCH_ASSOC);

    // Изменяем запрос для получения оценок, чтобы учитывать диапазон дат
    $stmt_marks = $dbh->prepare("SELECT s.fio AS student_name, DATE_FORMAT(j.date, '%d.%m.%Y') AS formatted_date, m.mark
                                 FROM students s
                                 LEFT JOIN job j ON j.id_item = :selected_item_id AND j.date BETWEEN :start_date AND :end_date
                                 LEFT JOIN marks m ON j.id = m.id_job AND m.id_student = s.id
                                 WHERE s.id IN (
                                     SELECT s.id
                                     FROM students s
                                     INNER JOIN manual m ON s.id_class = m.id_class
                                     INNER JOIN teachers t ON m.id_teacher = t.id
                                     WHERE t.id = :teacher_id
                                 )
                                 ORDER BY s.fio, DATE_FORMAT(j.date, '%d.%m.%Y')");
    $stmt_marks->bindParam(':selected_item_id', $selected_item_id);
    $stmt_marks->bindParam(':start_date', $start_date);
    $stmt_marks->bindParam(':end_date', $end_date);
    $stmt_marks->bindParam(':teacher_id', $teacher_id);
    $stmt_marks->execute();
    $marksData = $stmt_marks->fetchAll(PDO::FETCH_ASSOC);

    foreach ($marksData as $mark) {
        $marksMap[$mark['student_name']][$mark['formatted_date']] = $mark['mark'] ?? '0';
    }

    // Display the table with student names, dates, and marks
    echo '<div style="overflow-x:auto;">';
    echo '<table border="1">';
    echo '<tr><th>ФИО ученика</th>';

    // Display unique dates as column headers
    foreach ($dates as $date) {
        echo '<th>' . $date['formatted_date'] . '</th>';
    }

    echo '</tr>';

    // Display student names and their corresponding marks
    foreach ($students as $student) {
        echo '<tr>';
        echo '<td style="position: sticky; left: 0; background-color: #f2f2f2;">' . $student["student_name"] . '</td>';

        foreach ($dates as $date) {
            echo '<td>' . ($marksMap[$student["student_name"]][$date['formatted_date']] ?? '0') . '</td>';
        }

        echo '</tr>';
    }

    echo '</table>';
    echo '</div>';
}
      
}
    ?>
    <?php if(isset($_SESSION['message'])): ?>
        <div class="message-box">
            <?php echo $_SESSION['message']; ?>
        </div>
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>

<?php
echo "<div >";
echo "<form method='post' action='report.php'  id='subjectJournalForm' style='display: none;' >";
echo '<select name="quarter" class="input">
    <option value="1" ' . (isset($_POST["quarter"]) && $_POST["quarter"] == '1' ? 'selected' : '') . '>1 четверть (01.09.2023 - 05.11.2023)</option>
    <option value="2" ' . (isset($_POST["quarter"]) && $_POST["quarter"] == '2' ? 'selected' : '') . '>2 четверть (06.11.2023 - 09.01.2024)</option>
    <option value="3" ' . (isset($_POST["quarter"]) && $_POST["quarter"] == '3' ? 'selected' : '') . '>3 четверть (10.01.2024 - 31.03.2024)</option>
    <option value="4" ' . (isset($_POST["quarter"]) && $_POST["quarter"] == '4' ? 'selected' : '') . '>4 четверть (01.04.2024 - 31.05.2024)</option>
    <option value="5" ' . (isset($_POST["quarter"]) && $_POST["quarter"] == '5' ? 'selected' : '') . '>1 Полугодие (01.09.2023 - 31.12.2023) для 10,11 классов</option>
    <option value="6" ' . (isset($_POST["quarter"]) && $_POST["quarter"] == '6' ? 'selected' : '') . '>2 Полугодие (01.01.2024 - 31.05.2024) для 10,11 классов</option>
</select>';
// Find the teacher's ID based on their full name (fio)
$stmt_teacher_id = $dbh->prepare("SELECT id FROM teachers WHERE fio = :teacher_fio");
$stmt_teacher_id->bindParam(':teacher_fio', $_SESSION['fio'], PDO::PARAM_STR);
$stmt_teacher_id->execute();
$teacher_id = $stmt_teacher_id->fetchColumn();

// Fetch the classes and subjects associated with the teacher
$stmt_classes = $dbh->prepare("SELECT c.id AS class_id, c.name AS class_name, i.id AS item_id, i.name AS item_name
                              FROM class c
                              INNER JOIN item i ON c.id = i.id_class
                              WHERE i.id_teacher = :teacher_id");
$stmt_classes->bindParam(':teacher_id', $teacher_id, PDO::PARAM_INT);
$stmt_classes->execute();
$class_subjects = $stmt_classes->fetchAll(PDO::FETCH_ASSOC);

echo "<select name='class_subject' class='input'>";
echo "<option value='' selected disabled>Выберите Класс - Предмет</option>";

foreach ($class_subjects as $row) {
    $optionValue = $row['class_id'] . '-' . $row['item_id']; // Combine class and item IDs as value
    $optionLabel = $row['class_name'] . ' - ' . $row['item_name']; // Display class and item names
    echo "<option value='" . $optionValue . "'>" . $optionLabel . "</option>";
}

echo "</select>";
echo '<input type="submit" class="input" name="generate_reportee" value="Сформировать отчет">';
echo "</form>";

if (isset($_POST['generate_reportee'])) {

        $quarterDates = [
        1 => ['2023-09-01', '2023-11-05'],
        2 => ['2023-11-06', '2024-01-09'],
        3 => ['2024-01-10', '2024-03-31'],
        4 => ['2024-04-01', '2024-05-31'],
        5 => ['2023-09-01', '2023-12-31'],
        6 => ['2024-01-01', '2024-05-31']
    ];
    $selected_quarter = $_POST['quarter'];
    $start_date = $quarterDates[$selected_quarter][0];
    $end_date = $quarterDates[$selected_quarter][1];
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
    $stmt_marks = $dbh->prepare("SELECT s.fio AS student_name, m.mark, j.date
                                 FROM marks m
                                 JOIN students s ON m.id_student = s.id
                                 JOIN job j ON m.id_job = j.id
                                 WHERE s.id_class = :class_id AND m.id_item = :subject_id
                                 AND j.date BETWEEN :start_date AND :end_date");
    $stmt_marks->bindParam(':class_id', $selected_class_id, PDO::PARAM_INT);
    $stmt_marks->bindParam(':subject_id', $selected_subject_id, PDO::PARAM_INT);
    $stmt_marks->bindParam(':start_date', $start_date);
    $stmt_marks->bindParam(':end_date', $end_date);
    $stmt_marks->execute();
    $marks = $stmt_marks->fetchAll(PDO::FETCH_ASSOC);

    // Display student grades in a table
    echo "<table border='1' id='marksTableContainer'>";
    echo "<tr><th>ФИО ученика</th>";

    $unique_dates = array_unique(array_column($marks, 'date'));
    foreach ($unique_dates as $date) {
        echo "<th>" . date('d.m.Y', strtotime($date)) . "</th>";
    }

    echo "</tr>";

    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . $student['fio'] . "</td>";

        foreach ($unique_dates as $date) {
            $student_mark = '';
            foreach ($marks as $mark) {
                if ($mark['student_name'] === $student['fio'] && $mark['date'] === $date) {
                    $student_mark = $mark['mark'];
                    break;
                }
            }
            echo "<td>" . ($student_mark != '' ? $student_mark : '0') . "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
} 
echo "</div>";
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
// JavaScript функция для переключения видимости формы
function toggleSubjectJournalForm() {
    var form = document.getElementById('subjectJournalForm');
    if (form.style.display === 'none') {
        form.style.display = 'block';
    } else {
        form.style.display = 'none';
    }
}

</script>
<script>
    function addToClass(studentId, classId) {
    var fioElement = document.querySelector('tr[data-id="' + studentId + '"] td[data-type="fio"]');
    var fio = fioElement.textContent;

    var formData = new FormData();
    formData.append('fio', fio);
    formData.append('id_class', classId);

    fetch('vender/add_student_in_class.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data); // Показать сообщение об успешном добавлении студента
    })
    .catch(error => {
        console.error('Произошла ошибка при выполнении запроса:', error);
    });
}
</script>
<script>
const studentsTable = document.getElementById('poisk'); // изменено на 'poisk'
const searchInput = document.getElementById('searchInput');

searchInput.addEventListener('input', function() {
    const searchTerm = searchInput.value.toLowerCase();

    Array.from(studentsTable.getElementsByTagName('tr')).slice(1).forEach(row => {
        const fio = row.getElementsByTagName('td')[0].innerText.toLowerCase(); // поменяли на ФИО
        const className = row.getElementsByTagName('td')[1].innerText.toLowerCase(); // поменяли на класс
        if (fio.includes(searchTerm) || className.includes(searchTerm)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});
</script>
<script>
const studentsTableAdd = document.getElementById('add_poisk');
const searchInputt = document.getElementById('searchInputt');

searchInputt.addEventListener('input', function() {
    const searchTerm = searchInputt.value.trim().toLowerCase();

    Array.from(studentsTableAdd.getElementsByTagName('tr')).slice(1).forEach(row => {
        const fio =row.getElementsByTagName('td')[0].innerText.toLowerCase(); 

        if (fio.includes(searchTerm)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});
</script>
<script src="path/to/script.js"></script>

<script>
    function toggleTable() {
        var table = document.getElementById('studentsTable');
        table.style.display = (table.style.display === 'none') ? 'block' : 'none';
    }

    function toggleTableAdd() {
        var table = document.getElementById('studentsTableAdd');
        table.style.display = (table.style.display === 'none') ? 'block' : 'none';
    }
</script>
<script>
    document.getElementById('showFormButtonn').addEventListener('click', function() {
        document.getElementById('subjectJournalForm').style.display = 'block';
        document.getElementById('toggleFormButtonn').style.display = 'block';
        this.style.display = 'none';
    });

    document.getElementById('toggleFormButtonn').addEventListener('click', function() {
        document.getElementById('subjectJournalForm').style.display = 'none';
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