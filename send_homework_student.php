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
      <li><a href="http://diary/raspisanie.php">Создать отчеты</a></li>
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

   <div class='heading'>Отправить письмо по почте</div>


    <?php
if ($_SESSION['rule'] !== '4') {
    echo "Нет доступа к странице ❌";
} else {
?>
<form method="post">
    <div class="card">
        <div class="card-info">
            <div class="filmcontainer">
                <div class="maininfo">
                    <div class="ssilka">
                        <?php
                        if (!isset($_POST['fio']) && !isset($_POST['email'])) { 
                        ?>
                        <form enctype="multipart/form-data" action="send.php" method="post">
                            <label>ФИО отправителя:</label><br>  
                            <input style="text-align: center; background: white;" class="inputt" type="text" name="fio" placeholder="<?php echo "".$_SESSION['fio']; ?>" readonly required><br>
                            
                            <label>Укажите почту получателя:</label><br> 
                            <input style="text-align: center; background: white;" class="inputt" type="text" name="email" placeholder="Email" required><br>
                            
                            <label>Описание задания:</label><br> 
                            <textarea style="text-align: center; background: white; width: 35%; height: 300px; font-size: 16px;" class="inputt" type="text" name="work" required></textarea><br>
                            
                            <label>Укажите ссылку на гугл диск:</label><br> 
                            <input style="text-align: center; background: white;" class="inputt" type="text" name="gugl" placeholder="Ссылка" required><br>
                            
                            <input class="inputt" type="submit" value="Отправить">
                        </form>
                        <?php } else { 
                            $fio = $_POST['fio'];
                            $email = $_POST['email'];
                            $work = $_POST['work'];
                            $gugl = $_POST['gugl'];

                            $fio = htmlspecialchars($fio);
                            $email = htmlspecialchars($email);
                            $work = htmlspecialchars($work);
                            $gugl = htmlspecialchars($gugl);

                            $fio = urldecode($fio);
                            $email = urldecode($email);
                            $work = urldecode($work);
                            $gugl = urldecode($gugl);

                            $fio = trim($fio);
                            $email = trim($email);
                            $work = trim($work);
                            $gugl = trim($gugl);

                            if (mail($email, "Описание задания: " . $work, "ФИО: " . $_SESSION['fio'] . "\r\n" . "Ссылка на задание: " . $gugl, "From: bskoriceiii2004@mail.ru")) {
                                echo "Сообщение успешно отправлено 🚀";
                            } else {
                                echo "При отправке сообщения возникли ошибки 😔";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php
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