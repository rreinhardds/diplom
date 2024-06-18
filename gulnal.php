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
    border-color: #21638A;
 width: 97%;

 height: 40px;
 line-height: 28px;
margin: 10px;
 padding-left: 2.5rem;
 border-radius: 30px;
 background-color: #ffffff;
 color: #0d0c22;
}

.input::placeholder {
 color: #9e9ea7;
}
.inputt{
width: 10%;
text-decoration: none; 
 height: 40px;
margin-bottom: 20px;
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
 height: 40px;
margin-bottom: 20px;
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
  width: 100%;
  border-color: #000000;
  margin-top: 3%;
}
td{
 color: #000000;
  background: #e3f2fd;
  
  border-color: #000000;
  text-align: center;
  font-family: 'EB Garamond';
   font-size: 20px;
}

.status.red {
    background: red;
    font-weight: bold; /* Жирный шрифт для выделения */
}
.red{
    background: red;
    font-weight: bold;
}
.black{
    background: black;
    font-weight: bold;
}
.status.black {
    background: black;
    font-weight: bold; /* Жирный шрифт для выделения */
}
.scrollable-table {
    max-height: 300px; /* Высота контейнера */
    overflow: auto; /* Добавляет прокрутку при необходимости */

}

.zadanie{
    margin-top: 5%;
}




</style>
<body>
<header>
    <nav class="navbar" style="font-weight: 900; border-radius: 30px; background-color: #e3f2fd;">
        <div class="container-fluid">

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
    <?php
  // Получаем id_class из параметров GET
$id_class = $_GET['id_class'];

// Подготавливаем SQL запрос для получения имени класса из таблицы class по id_class
$stmt_class = $dbh->prepare("SELECT name FROM class WHERE id = :id_class");

// Привязываем значение id_class к плейсхолдеру в запросе
$stmt_class->bindValue(':id_class', $id_class);

// Выполняем запрос
$stmt_class->execute();

// Извлекаем данные из запроса
$class = $stmt_class->fetch();

// Выводим имя класса
echo "<div class='heading'>Журнал заданий — " . $class['name'] . "</div>";
    ?>

   <form action="gulnal.php" method="GET">
    <input class="input" type="text" id="searchInput" placeholder="Поиск по описанию">           
    <table bgcolor="black" id="jobsTable">
        <tr style="font-weight: 1000; font-family: 'EB Garamond'; font-size: 30px;">
            <td>Дата</td>
            <td>Вид работы</td>
            <td>Задание</td>
            <td>Журнал</td>
        </tr>

        <?php
          

  if (isset($_GET['id_class']) && isset($_GET['teacher_id']) && isset($_GET['item_id'])&&$_SESSION['rule'] == 2) {
    $id_class = $_GET['id_class'];
    $teacher_id = $_GET['teacher_id'];
    $item_id = $_GET['item_id'];

    $stmt = $dbh->prepare("SELECT DISTINCT j.id, j.date, j.id_item, j.id_typework, j.description, wt.name AS typework_name, i.name AS item_name
                            FROM job j 
                            INNER JOIN students s ON j.id_class = s.id_class 
                            INNER JOIN worktype wt ON j.id_typework = wt.id
                            INNER JOIN item i ON j.id_item = i.id
                            LEFT JOIN marks m ON m.id_job = j.id AND m.id_student = s.id
                            WHERE j.id_teacher = :teacher_id and i.name = :item_name and i.id_class = :id_class");

    $stmt->bindValue(':teacher_id', $teacher_id);
    $stmt->bindValue(':item_name', $item_id);
    $stmt->bindValue(':id_class', $id_class);

    echo '<a class="ssilka inputbutton" style="padding: 0.5%;" href="add_homework.php?teacher_id=' . $teacher_id . '&id_class=' . $id_class . '&item_id=' . $item_id . '">Добавить задание</a>';
   

    if (!$stmt->execute()) {
        die("Ошибка выполнения запроса: " . $stmt->errorInfo()[2]);
    }

    foreach ($stmt as $row) {
        echo "<tr>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['typework_name'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td><a class='ssilka inputbutton' style='padding:0.5%;' href='sent_dz.php?id=" . $row['id'] . "&id_class=".$id_class."&item_id=". $row['id_item'] . "&teacher_id=".$teacher_id."'>Выставить отметки</a></td>";
        echo "</tr>";
    }
}
else{
    echo"Нет доступа.";
}
        ?>

            <?php else:
                echo '<h2>Вы что хакер?</h2>';
               
            ?>

        <?php endif ?>
<script>
    const jobsTable = document.getElementById('jobsTable');
    const searchInput = document.getElementById('searchInput');

    searchInput.addEventListener('input', function() {
        const searchTerm = searchInput.value.toLowerCase();

        Array.from(jobsTable.getElementsByTagName('tr')).slice(1).forEach(row => {
            const description = row.getElementsByTagName('td')[2].innerText.toLowerCase();
            if (description.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>   
</table>
</form>

                
        
</div>
</div>
        </main>
</div>

    <footer class="border-top footer text-muted">
        <div class="container"><hr style="opacity: 30%;">
         
            &copy; 2024 - eChronicle
        </div>
    </footer>
</body>
</html>