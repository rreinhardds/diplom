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
 border-radius: 30px;
 background-color: #ffffff;
 color: #0d0c22;
}

.input::placeholder {
 color: #9e9ea7;
}
.inputt{
width: 260px;
margin-left: 57%;
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
    
    width:  260px;
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
.inputbutton:hover:hover {
  background-color: #ffffff;
  color: #000;

}
.inputbutton:active {
  transform: translateY(-1px);
}
table {
width: 100%;
 border-collapse: collapse;
}
 table td, table th {
    text-align: center;
    border-radius: 10px;
     font-size: 18px;
border: 6px solid #e3f2fd;
padding: 8px;
}
 input[type='number'] {
border: none; /* убрать границу у инпута */
outline: none; /* убрать рамку фокуса */
background-color: transparent; /* сделать фон прозрачным */
width: 100%; /* чтобы инпут занимал всю ширину ячейки */
text-align: center; /* выравнивание текста по центру */
}
.epot{

     font-weight: bold; 
       font-family: EB Garamond;
    font-size: 18px;
    background-color: #e3f2fd;
    padding: 5px 10px;

}

.zad{
padding-top: 2%;
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
// Получаем id_job из параметров GET
$id_job = $_GET['id'];

// Подготавливаем SQL запрос для получения информации о задании из таблицы job по id_job
$stmt_job = $dbh->prepare("SELECT j.id, j.date, j.description, i.name AS item_name, wt.name AS typework_name, wt.id
                           FROM job j 
                           INNER JOIN item i ON j.id_item = i.id
                           INNER JOIN worktype wt ON j.id_typework = wt.id
                           WHERE j.id = :id_job");

// Привязываем значение id_job к плейсхолдеру в запросе
$stmt_job->bindValue(':id_job', $id_job);

// Выполняем запрос
$stmt_job->execute();

// Извлекаем данные из запроса
$job = $stmt_job->fetch();

// Выводим информацию о задании
echo "<div class='heading'>Выставление оценок — " . $job['item_name'] . " (" . $job['typework_name'] . ")</div>";
echo "<div class='epot'>ДАТА: " . $job['date'] . "</div>";
echo "<div class='epot'>ОПИСАНИЕ: " . $job['description'] . "</div>";

?>

<form action="save_marks.php" method="POST">

    <?php
    $id_class = $_GET['id_class'];
    $id_item = $_GET['item_id'];
    $teacher_id=$_GET['teacher_id'];
    ?>


    <input type="hidden" name="id_class" value="<?php echo $id_class; ?>">
    <input type="hidden" name="id_item" value="<?php echo $id_item; ?>">
    <input type="hidden" name="id_job" value="<?php echo $id_job; ?>">
    <input type="hidden" name="id_teacher" value="<?php echo $teacher_id; ?>">
    <input type="hidden" name="id_worktype" value="<?php echo $job['id']; ?>">

    <?php


    // Подготавливаем SQL запрос для получения списка студентов и текущих оценок по заданию
    $stmt_students = $dbh->prepare("SELECT s.id AS student_id, s.fio AS student_name, m.mark, m.id
                                     FROM students s
                                     LEFT JOIN marks m ON s.id = m.id_student AND m.id_item = :id_item AND m.id_job = :id_job 
                                     WHERE s.id_class = :id_class");

    // Привязываем значения id_item и id_job к плейсхолдерам в запросе
    $stmt_students->bindValue(':id_item', $id_item);
    $stmt_students->bindValue(':id_job', $id_job);
  
    $stmt_students->bindValue(':id_class', $id_class);

    // Выполняем запрос
    $stmt_students->execute();

    // Выводим список студентов и текущие оценки
   echo "<table>"; 
   echo"<tr> <td>ФИО</td>
   <td>ОЦЕНКА</td>
        </tr>";
    while ($student = $stmt_students->fetch()) {
        echo "<tr>";
        echo "<td><span class='student_name'>" . $student['student_name'] . "</span></td>";
echo "<td><input type='number' name='marks[" . $student['student_id'] . "]' value='" . $student['mark'] . "' min='1' max='5' class='grade-input'></td>";
        echo "</tr>";
    }

    ?>
</table>
<?php  echo "<div ><a style='padding:1%;  ' href='gulnal.php?id_class=" . $id_class. "&teacher_id=" . $teacher_id .  "&item_id=" . $job['item_name']."' class='inputbutton input epot'>Вернуться к заданиям</a> <input class='input inputt epot ' type='submit' value='Сохранить оценки''></div>"; ?>
</form>
           


                
        
</div>
</div>
        </main>
          <?php else:
                echo '<h2>Вы что хакер?</h2>';
               
            ?>

        <?php endif ?>

</div>

    <footer class="border-top footer text-muted">
        <div class="container"><hr style="opacity: 30%;">
         
            &copy; 2024 - eChronicle
        </div>
    </footer>
</body>
</html>