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
  color: #000000;
  font-weight: 900;
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
    margin-left:37.5%;
    margin-top:10%;
    max-width: 20%;
    background: #F8F9FD;
    background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgb(244, 247, 251) 100%);
    border-radius: 40px;
    padding: 25px 35px;
    border: 5px solid rgb(255, 255, 255);
    box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 30px 30px -20px;

}

.heading {
    text-align: center;
    font-weight: 900;
    font-size: 30px;
    color: rgb(16, 137, 211);
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
.men{
   align-content: center;
    margin-top:1%;
    margin-bottom: 5%;
    width: 90%;
    text-transform: uppercase;
    text-align: center;
    background: #e3f2fd;
    color: #ffffff ;
    border-radius: 40px;
    border: 5px solid rgb(255, 255, 255);
    box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 30px 30px -20px;
      display:  inline-block;

    flex-direction: row;
    border-color: #e3f2fd ;

    justify-content: center;
    align-items: center;
    display: flex;
    height: 3vw;

    padding: 20px;
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
                

            

            </div>
        </nav>
    </header>
    <div class="container">
        <main role="main">
<div class="text-center">
<div class="containerr">
<div class="heading">
    
</div>
        <form action="" class="form">
              <?php if(!empty($_SESSION['rule'])) :?>

                <?php

        $sql=$dbh->prepare("SELECT rule FROM users ");
        $array=$sql->fetch(PDO::FETCH_ASSOC);

        if($_SESSION['rule']==1){

            echo "<div class='men'><a href='glavnaya_admi.php'>Перейти в режим администратора</a></div>";
            $stmt_check_parent = $dbh->prepare("SELECT id FROM parents WHERE id_user = :user_id");
            $stmt_check_parent->bindValue(':user_id', $_SESSION['id']);
            $stmt_check_parent->execute();

            $is_parent = $stmt_check_parent->rowCount() > 0;

            if ($is_parent) {
                echo "<div class='men'><a href='parent_mode.php'>Перейти в родительский режим</a></div>";
            }
        }

        if($_SESSION['rule']==2){
            echo "<div class='men'><a href='glavnaya_teacher.php'>Перейти в режим учителя</a></div>";
            $stmt_check_parent = $dbh->prepare("SELECT id FROM parents WHERE id_user = :user_id");
        $stmt_check_parent->bindValue(':user_id', $_SESSION['id']);
        $stmt_check_parent->execute();

        $is_parent = $stmt_check_parent->rowCount() > 0;

        if ($is_parent) {
            echo "<div class='men'><a href='parent_mode.php'>Перейти в родительский режим</a></div>";
        }
        }
        if($_SESSION['rule']==3){
            $stmt_check_parent = $dbh->prepare("SELECT id FROM parents WHERE id_user = :user_id");
        $stmt_check_parent->bindValue(':user_id', $_SESSION['id']);
        $stmt_check_parent->execute();

        $is_parent = $stmt_check_parent->rowCount() > 0;

        if ($is_parent) {
            echo "<div class='men'><a href='parent_mode.php'>Перейти в родительский режим</a></div>";
        }
        }
        if($_SESSION['rule']==4){
            echo "<div class='men'><a href='glavnaya_students.php'>Перейти в режим ученика</a></div>";
        }

        else
        {
           echo '<div style="display: none;">Этот элемент скрыт</div>';
        }
        ?> 


                    <?php else:
                
                echo '<a  href="Avtoriz.php" style="padding-left:40%; ">На главную</a>';
            ?>
        <?php endif ?>
        <?php else:
                echo '<h2>Вы что хакер?</h2>';
               
            ?>

        <?php endif ?>
         




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