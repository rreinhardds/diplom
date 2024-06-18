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
    width: 30%;
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
    width: auto;
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
td{
 color: #000000;
  background: #e3f2fd;
  height: auto;
  width: auto;
  
  border-color: #000000;
  text-align: center;
  font-family: 'EB Garamond';
   font-size: 20px;
}
table td, table th {
    width: 25%; /* Здесь можно указать любой процент ширины для колонок */
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
.input-select {
        width: auto;
         margin-top: 5%;
    border-color: #21638A;
    width: 30%;
    height: 40px;
    line-height: 28px;
  
    border-radius: 30px;
    background-color: #ffffff;
    color: #0d0c22;
    text-align: center;
    }

</style>
<body>
<header>
         <nav class="navbar" style=" font-weight: 900;   border-radius: 30px; background-color: #e3f2fd; ">
            <div class="container-fluid" >

                <?php if(!empty($_SESSION['fio'])) :?>
                    <?php if($_SESSION['rule'] == 1) :?>

                <ul class="top-menu">

  <li><a href=""><?php echo "".$_SESSION['fio'];?></a></li>

  <li><a href="glavnaya.php">Режим пользователя</a></li>

<li class="link-standart"><a href="" class="dropdown dropdown-standart">Расписание</a>
    <ul class="submenu-standart">
      <li><a href="http://diary/raspisanie.php">Основное расписание</a></li>
      <li><a href="http://diary/izmvraspisanii.php">Изменения в расписании</a></li>
    </ul>
</li>
<li class="link-standart"><a href="glavnaya_admi.php" class="dropdown dropdown-standart">Главная</a>
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
    <div class="heading"> Настройки дисциплин </div>

<div class="men">
    <?php
    if ($_SESSION['rule'] !== '1') {
        echo '<a>Доступ запрещен к этой странице для вашей роли.</a>';
    } else {
        echo '
        <div class="button-container">
<button id="showFormButton" class="login-button" style="margin-right: 5px;">Добавить дисциплину</button>
            <button class="login-button" style="margin-right: 5px; display: none;" id="toggleFormButton">Свернуть форму</button>
            <button onclick="toggleTable()" class="login-button" style="margin-right: 5px;">Удалить дисциплину</button>
            <button onclick="toggleTableAdd()" class="login-button" style="margin-right: 5px;">Внести изменения</button>

        </div>

        <form id="dataForm" style="display: none;" method="post" action="vender/save_subj.php">';
$stmt_teachers = $dbh->prepare("SELECT id, fio FROM teachers");
    $stmt_teachers->execute();
    $teachers = $stmt_teachers->fetchAll(PDO::FETCH_ASSOC);

    // Запрос для получения списка классов
    $stmt_classes = $dbh->prepare("SELECT id, name FROM class");
    $stmt_classes->execute();
    $classes = $stmt_classes->fetchAll(PDO::FETCH_ASSOC);

    echo "<table border='0'>";
    echo "<tr><th>Введите дисциплину</th><th>Выберите учителя</th><th>Выберите класс</th><th>Добавить</th></tr>";

    echo "<tr>";
    echo '<td><input class="input" type="text" autocomplete="off" placeholder="Наименование дисциплины" id="name" name="name"></td>';

    echo '<td><select name="teacher_id" class="iinput">';
    echo "<option value='' selected disabled>Выберите учителя</option>";
    foreach ($teachers as $teacher) {
        echo '<option value="'.$teacher["id"].'">'.$teacher["fio"].'</option>';
    }
    echo '</select></td>';

    echo '<td><select name="class_id" class="iinput">';
    echo "<option value='' selected disabled>Выберите класс</option>";
    foreach ($classes as $class) {
        echo '<option value="'.$class["id"].'">'.$class["name"].'</option>';
    }
    echo '</select></td>';

    echo '<td><input class="login-button" type="submit" value="+"></td>';
    echo "</tr>";

    echo "</table>";
echo'</form>';
    }
    ?>
    <?php if(isset($_SESSION['message'])): ?>
        <div class="message-box">
            <?php echo $_SESSION['message']; ?>
        </div>
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>


<?php

echo "<div id='studentsTable' style='display:none;'>";
echo "<form action='vender/class_update.php' method='post'>";
echo " <input class='input' type='text' id='searchInput' placeholder='Поиск по ФИО, классу, предмету'>";

$stmt = $dbh->prepare("SELECT i.name as item_name, t.fio as teacher_name, c.name as class_name
        FROM item i
        INNER JOIN teachers t ON i.id_teacher = t.id
        INNER JOIN class c ON i.id_class = c.id");
            $stmt->execute();
            $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

      echo "<table border='0'>";
    echo "<tr><th>Дисциплина</th><th>Учитель</th><th>Класс</th><th>Удалить</th></tr>";
    foreach ($items as $row) {
        echo "<tr>";
        echo "<td>".$row["item_name"]."</td>";
        echo "<td>".$row["teacher_name"]."</td>";
        echo "<td>".$row["class_name"]."</td>";
         echo '<td><input class="login-button" type="submit" value="❌"></td>'; 
        echo "</tr>";
    }
    echo "</table>";; 

echo "</form>";
echo "</div>";
?>

<div id='studentsTableAdd' style='display:none;'>
    <form method="post" action="vender/add_student_in_class.php">
        <?php
        echo " <input class='input' type='text' id='searchInput' placeholder='Поиск по ФИО, классу, предмету'>";
        $stmt = $dbh->prepare("SELECT i.name as item_name, t.fio as teacher_name, c.name as class_name
        FROM item i
        INNER JOIN teachers t ON i.id_teacher = t.id
        INNER JOIN class c ON i.id_class = c.id");
            $stmt->execute();
            $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<table border='0'>";
    echo "<tr><th>Дисциплина</th><th>Учитель</th><th>Класс</th><th>Изменить</th></tr>";
    foreach ($items as $row) {
        echo "<tr>";
        echo "<td><select  class='iinput' name='item_id'>";
        echo "<option value='".$row["item_id"]."'>".$row["item_name"]."</option>";
        echo "</select></td>";
        echo "<td><select class='iinput' name='teacher_id'>";
        echo "<option value='".$row["teacher_id"]."'>".$row["teacher_name"]."</option>";
        echo "</select></td>";
        echo "<td><select  class='iinput' name='class_id'>";
        echo "<option value='".$row["class_id"]."'>".$row["class_name"]."</option>";
        echo "</select></td>";
        echo '<td><input class="login-button" type="submit" value="🖋"></td>';
        echo "</tr>";
    }
    echo "</table>";
    ?>
    </form>
</div>


            <?php else:
                echo '<h2>Вы что хакер?</h2>';
                echo '<a class="ssilka inputbutton" style="padding:1%;" href="Avtoriz.php">Вернуться</a>';
            ?>

        <?php endif ?>
                
        

</div>
        </main>

</div>
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
<script src="path/to/script.js"></script>
<script>
function changeClass(studentId) {
    var selectedClass = document.querySelector('select[name="class_'+studentId+'"]').value;

    fetch('vender/class_update.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            id_class: selectedClass, 
            id: studentId 
        })
    }).then(response => {
        if (response.ok) {
            alert('Класс успешно изменен!');
        } else {
            alert('Ошибка в изменении.');
        }
    }).catch(error => {
        console.error('Error:', error);
    });
}
</script>
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