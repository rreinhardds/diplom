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

    align-items: center;
    display: flex;
     justify-content: center;

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
  <form action="search_users.php" method="GET">   
   <?php





           if (isset($_SESSION['id']) && isset($_GET['student_id'])) {
    $student_id = $_GET['student_id'];
    
    $stmt_check_parent = $dbh->prepare("
        SELECT p.id_user
        FROM parents p
        WHERE p.id_user = :user_id AND p.id_student = :student_id
    ");
    $stmt_check_parent->execute(['user_id' => $_SESSION['id'], 'student_id' => $student_id]);

    if ($stmt_check_parent->rowCount() > 0)
     { $stmt_child_class = $dbh->prepare("
        SELECT c.name AS class_name
        FROM students s
        JOIN class c ON s.id_class = c.id
        WHERE s.id = :student_id
    ");
    $stmt_child_class->bindValue(':student_id', $student_id);
    $stmt_child_class->execute();

    if ($row = $stmt_child_class->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='heading'>Электронный дневник — " . $row['class_name'] . "</div>";
    } 
        if (isset($_GET['week'])) {

            $week_start = date('Y-m-d', strtotime('monday this week', strtotime($_GET['week'])));
            $week_end = date('Y-m-d', strtotime('sunday this week', strtotime($_GET['week'])));
        } else {
            $week_start = date('Y-m-d', strtotime('monday this week'));
            $week_end = date('Y-m-d', strtotime('sunday this week'));
        }

        $stmt = $dbh->prepare("
            SELECT j.id, j.date, j.id_item, j.id_typework, j.description, wt.name AS typework_name, i.name AS item_name, m.mark
            FROM job j
            INNER JOIN students s ON j.id_class = s.id_class
            INNER JOIN worktype wt ON j.id_typework = wt.id
            INNER JOIN item i ON j.id_item = i.id
            LEFT JOIN marks m ON m.id_job = j.id AND m.id_student = s.id
            WHERE s.id = :student_id
            AND j.date BETWEEN :week_start AND :week_end
        ");

        $stmt->execute(['student_id' => $student_id, 'week_start' => $week_start, 'week_end' => $week_end]);
        
        echo "<div style='display: flex; align-items: center; justify-content: space-around; width: 100%;'>";
        // Вывод кнопок для переключения недель
        echo "<a class='ssilka inputbutton' href='?student_id=$student_id&week=" . date('Y-m-d', strtotime($week_start . ' - 7 days')) . "'>Предыдущая неделя</a>";
        echo "<a class='ssilka inputbutton' href='?student_id=$student_id&week=" . date('Y-m-d', strtotime('today')) . "'>Текущая неделя</a>";
        echo "<a class='ssilka inputbutton' href='?student_id=$student_id&week=" . date('Y-m-d', strtotime($week_end . ' + 1 days')) . "'>Следующая неделя</a>";
        echo "</div>";

echo '<table bgcolor="black">
            <tr style="font-weight: 1000; font-family: \'EB Garamond\'; font-size: 30px;">
              <td>Дата</td>
              <td>Предмет</td>
              <td>Вид работы</td>
              <td>Задание</td>
              <td>Оценка</td>
            </tr>';


        foreach ($stmt as $row) {
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['item_name'] . "</td>";
            echo "<td>" . $row['typework_name'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . ($row['mark'] ?? 'N/A') . "</td>";
            echo "</tr>";
        }
    } else {
        // Если пользователь не является родителем этого ученика
        echo "У вас нет прав доступа к этой странице";
    }
} else {
    echo "У вас нет прав доступа к этой странице"; // Если не передан ID ученика или пользователь не авторизован
}
?> 

  <?php else:
                echo '<h2>Вы что хакер?</h2>';
               
            ?>

        <?php endif ?>
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