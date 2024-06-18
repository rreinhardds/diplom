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
	  font-weight: 500;
	font-size: 15px;
	text-transform: uppercase;
 color: #000; 
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
.inputbutton2{
    width: 20%;
text-decoration: none; 
 height: 40px;
margin-bottom: 20px;
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #21638A;
  background-color: #fff;
  border-color: #21638A;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
}


.ccontainer {
                display: flex;
                align-items: center;
                flex-direction: column;
            }
        
            .ccontainer label {
                text-align: center;
                margin-bottom: 10px;
                color: #000;
            }
            .ccontainer input{

    background-color: transparent; /* Делает инпут прозрачным */
            }
        
            .ccontainer input, .ccontainer select, .ccontainer textarea {
            	 text-align: center;
                width: 300px;
                padding: 5px;
                margin-bottom: 15px;
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
<form action="vender/add_homework_fink.php" method="POST">
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

 if (isset($_GET['id_class']) && isset($_GET['teacher_id']) && isset($_GET['item_id']) && $_SESSION['rule'] == 2) {
    $teacher_id = $_GET['teacher_id'];

    // Проверка совпадения сессии с teachers.name и id
    $stmt_teacher = $dbh->prepare("SELECT id FROM teachers WHERE fio = :fio AND id = :teacher_id");
    $stmt_teacher->bindValue(':fio', $_SESSION['fio']);
    $stmt_teacher->bindValue(':teacher_id', $teacher_id);
    $stmt_teacher->execute();
    $teacher = $stmt_teacher->fetch();

    if ($teacher) {
        $id_class = $_GET['id_class'];
        $teacher_id = $_GET['teacher_id'];
        $item_id = $_GET['item_id'];
        echo " <input type='hidden' name='id_class' value='$id_class'>
                <input type='hidden' name='teacher_id' value='$teacher_id'> ";
        
        echo "<div class='heading'>Добавить задание</div>";
        echo "
        <div class='card'>
            <div class='card-info'>
                <div class='filmcontainer'>
                    <div class='maininfo'>
                    <div class='ssilka'>
                    <div class='ccontainer'>";
        
        echo '<label>Класс</label><input class="inputbutton2" readonly type="text" value="' . $class['name'] . '">';
        echo '<label>Предмет</label><input name="id_item" class="inputbutton2" readonly type="text" value="' . $item_id . '">';
        
        $sql = "SELECT id, name FROM worktype";
        $result = $dbh->query($sql);
        
        echo '<label>Назначение задания</label>';
        
        if ($result) { 
            echo '<select name="type_work" class="inputbutton2">';
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
            }
            echo '</select>';
        } else {
            echo 'Error fetching work types: ' . $dbh->errorInfo()[2];
        }
        
        echo '<br><label> Описание задания</label>';
        echo '<textarea class="inputbutton2" name="description" style="width: 1321px; height: 134px; margin: 20px"></textarea>';
        
        echo '<label for="startDate">Дата</label>';
        echo '<input type="date" id="startDate" name="date" min="' . date("Y-m-d", strtotime("+0 day")) . '" max="' . date("Y-m-t", strtotime("+1 month")) . '">';
        
        echo "<input type='submit' class = 'inputt' value='Опубликовать'>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>";
    } else {
        echo "Нет доступа.";
    }
} else {
    echo "Нет доступа.";
}
        ?>

            <?php else:
                echo '<h2>Вы что хакер?</h2>';
               
            ?>

        <?php endif ?>

  
</select>
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