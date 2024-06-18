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
 width: 85%;
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
  width: 100%;
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






</style>
<body>
<header>
         <nav class="navbar" style=" font-weight: 900;   border-radius: 30px; background-color: #e3f2fd; ">
            <div class="container-fluid" >

                <?php if(!empty($_SESSION['fio'])) :?>
                    <?php if($_SESSION['rule'] == 4) :?>

                <ul class="top-menu">

  <li><a href=""><?php echo "".$_SESSION['fio'];?></a></li>

  <li><a href="glavnaya.php">Режим пользователя</a></li>

<li class="link-standart"><a href="" class="dropdown dropdown-standart">Расписание</a>
    <ul class="submenu-standart">
      <li><a href="http://diary/raspisanie.php">Основное расписание</a></li>
      <li><a href="http://diary/izmvraspisanii.php">Изменения в расписании</a></li>
    </ul>
</li>
<li class="link-standart"><a href="glavnaya_students.php" class="dropdown dropdown-standart">Дневник</a>
    <ul class="submenu-standart">
      <li><a href="http://diary/dolg.php">Просмотр задолженностей</a></li>
    <li><a href="http://diary/stud_data.php">Промежуточный просмотр оценок</a></li>
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
if ($_SESSION['rule'] !== '4') {
    echo '<a>Доступ запрещен к этой странице для вашей роли.</a>';
} else {
$id = $_GET['id'];
$firstStudentId = null;

$stmt = $dbh->prepare("SELECT id, fio FROM students WHERE fio = :fio");
$stmt->execute(['fio' => $_SESSION['fio']]);
$row = $stmt->fetch();

if ($row !== false) {
    $firstStudentId = $row['id'];
}

if ($firstStudentId > 0) {
    $_SESSION['id'] = $firstStudentId;
}
}
if (isset($_SESSION['id'])) {
    // Запрос для получения информации о студенте
    $stmt = $dbh->prepare("SELECT id_class, fio FROM students WHERE id = :student_id");
    $stmt->execute(['student_id' => $_SESSION['id']]);

    $result = $stmt->fetch();

    if ($result) {
        // Запрос для получения названия класса по идентификатору класса
        $stmt_class = $dbh->prepare("SELECT name FROM class WHERE id = :class_id");
        $stmt_class->execute(['class_id' => $result['id_class']]);

        $class = $stmt_class->fetch();

        if ($class) {
            echo "<div class='heading'>Электронный дневник — ". $class['name'] . "</div>";
        }

        echo '
        <form action="students_jurnal.php" method="POST">
            <table bgcolor="black">
                <tr style="font-weight: 1000; font-family: \'EB Garamond\'; font-size: 30px;">
                    <td>Дата</td>
                    <td>Предмет</td>
                    <td>Вид работы</td>
                    <td>Задание</td>
                    <td>Оценка</td>
                    <td>Отправить д/р</td>
                </tr>';

        if (isset($_SESSION['id'])) {
                if (isset($_GET['week'])) {
                    $startOfWeek = strtotime($_GET['week']);
                    $endOfWeek = strtotime('+6 days', $startOfWeek);
                } else {
                    $startOfWeek = strtotime('last monday');
                    $endOfWeek = strtotime('next sunday');
                }

                $currentDate = strtotime(date('Y-m-d')); // Текущая дата

                $stmt = $dbh->prepare("SELECT j.id, j.date, j.id_item, j.id_typework, j.description, wt.name AS typework_name, i.name AS item_name, m.mark
                                    FROM job j 
                                    INNER JOIN students s ON j.id_class = s.id_class 
                                    INNER JOIN worktype wt ON j.id_typework = wt.id
                                    INNER JOIN item i ON j.id_item = i.id
                                    LEFT JOIN marks m ON m.id_job = j.id AND m.id_student = s.id
                                    WHERE s.id = :student_id 
                                    AND j.date BETWEEN :startOfWeek AND :endOfWeek");

                $stmt->execute([
                    'student_id' => $_SESSION['id'],
                    'startOfWeek' => date('Y-m-d', $startOfWeek),
                    'endOfWeek' => date('Y-m-d', $endOfWeek)
                ]);

                echo "<a class='ssilka inputbutton' style='padding:1%; 'href='?week=" . date('Y-m-d', strtotime('-7 days', $startOfWeek)) . "'>Предыдущая неделя</a> ";
                echo "<a class='ssilka inputbutton' style='padding:1%;' href='?week=" . date('Y-m-d', strtotime('last monday')) . "'>Текущая неделя</a> ";
                
                echo "<a class='ssilka inputbutton' style='padding:1%;' href='?week=" . date('Y-m-d', strtotime('+7 days', $startOfWeek)) . "'>Следующая неделя</a>";

                foreach ($stmt as $row) {
                    echo "<td>" . $row['date'] . "</td>";
                    echo "<td>" . $row['item_name'] . "</td>";
                    echo "<td>" . $row['typework_name'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "<td>" . ($row['mark'] ?? 'N/A') . "</td>";
                    echo "<td><a class='ssilka' style='padding:1%;' href='send_homework_student.php?id=" . $row['id'] . "'>Отправить</a></td>";
                    echo "</tr>";
                }
            }

        echo '
            </table>
        </form>';
    }
} 
 else{
     echo '<a>Доступ запрещен к этой странице для вашей роли.</a>';
 } 
   

?>

            <?php else:
                echo '<h2>Вы что хакер?</h2>';
                echo '<a class="ssilka inputbutton" style="padding:1%;" href="Avtoriz.php">Вернуться</a>';
            ?>

        <?php endif ?>
                
        
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