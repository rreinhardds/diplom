<?php require_once 'vender/connect.php';?>
<?php session_start();?>
<?php 
$id=$_GET['id'];
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
.border-top {
  border-top: 1px solid #e5e5e5;
}
.border-bottom {
  border-bottom: 1px solid #e5e5e5;
}

a {
  color: #0077cc;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 99%;
  white-space: nowrap;
  line-height: 60px;
}

html {
  position: relative;
  min-height: 100%;

}


body {
    margin-bottom: 60px;

}


.containerr {
    margin-left: 2.4%;
    margin-top:2%;
    max-width: 90%;
    background: #F8F9FD;
    background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgb(244, 247, 251) 100%);
    border-radius: 40px;
    padding: 25px 35px;
    border: 5px solid rgb(255, 255, 255);
    box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 30px 30px -20px;

}

.men{
    margin-left: 8%;
    margin-top:1%;
    margin-bottom: 2%;
    width: 250px;
    text-align: center;
    background: #e3f2fd;
    color: #21638A ;
    border-radius: 40px;
    border: 5px solid rgb(255, 255, 255);
    box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 30px 30px -20px;
      display:  inline-block;

    flex-direction: row;
    border-color: #e3f2fd ;

    justify-content: flex-start;

    padding: 20px;
}
.form {
    margin-top: 20px;

}
.container-fluid{
    right: 40px;
    height: 50px;
    text-align: center;
    font-size: 25px;
}
.select{
    width: 45%;
    height: 60%;
    border-radius: 50px;
    text-align: center;
    font-weight: 900;  
    border: none;
       color: rgb(16, 137, 211);
      background-color: #e3f2fd;
       font-family: 'EB Garamond',
        serif;
         font-size:22px ; 
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
h2::after {
    font-size: 12px;
    content: attr(data-tooltip);
    position: absolute;
    background: rgba(0, 0, 0, 0.7);
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    visibility: hidden;
    opacity: 0;
    transition: opacity 0.3s, visibility 0.3s;
}

h2:hover::after {
    visibility: visible;
    opacity: 1;
}
.menu {
    position: relative;
    display: inline-block;
}

.tooltip {
    visibility: hidden;
    opacity: 0;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    padding: 5px;
    z-index: 1;
    transition: opacity 0.3s;
}

.menu:hover .tooltip {
    visibility: visible;
    opacity: 1;
}

.tooltip a {
    display: block;
    color: #333;
    text-decoration: none;
    padding: 5px;
}

.tooltip a:hover {
    background-color: #e9e9e9;
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
                

            <?php else:
                echo '<h2>Вы что хакер?</h2>';
               
            ?>

        <?php endif ?>

            </div>
        </nav>
    </header>
    <div class="container">
        <main role="main">
<div class="text-center">
<div class="containerr">
<div class="heading"> Настройки администратора </div>
        <form action="" class="form">
              <?php if(!empty($_SESSION['fio'])) :?>
                    <?php else:
                
                echo '<a  href="Avtoriz.php" style="padding-left:40%; ">На главную</a>';
            ?>
        <?php endif ?>


        <div class="men">
            
            <h2 data-tooltip="Добавить новых пользователей"><a href="new_User.php">Регистрация</a></h2>

        </div>


         <div class="men">
            
             <h2 data-tooltip="Изменить, настроить профиль"><a href="search_users.php">Пользователи</a></h2>

        </div>


         <div class="men">
             <div class="menu">
              <h2 data-tooltip="Добавить, изменить">Расписание</h2>
                <div class="tooltip">
                    <a href="izmvraspisanii.php">Изменения</a>
                    <a href="raspisanie.php">Основное</a>
                </div>
                </div>

        </div>
        <div class="men">
            
            <a href="class_ruk.php"> <h2 data-tooltip="Назначить, отменить">Классное руководство</h2></a>

        </div>
        <div class="men">
            
             <h2 data-tooltip="Добавить новые,изменить класс, добавить ученика"><a href="edit_class.php">Классы</a></h2>

        </div>
         <div class="men">
            
            <a href= "subject.php"> <h2 data-tooltip="Добавить новые, добавить/изменить предмет(ы) учителю">Предметы</h2></a>

        </div>



        </form>
</div>
</div>
        </main>
</div>

    <footer class="border-top footer text-muted">
        <div class="container">
         
            &copy; 2024 - eChronicle
        </div>
    </footer>
</body>
</html>