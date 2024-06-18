<?php require_once 'vender/connect.php';?>
<?php session_start();?>
<?php 
$id=$_GET['id'];
?>
<?php 
$rule=$dbh->query("SELECT * FROM rule");

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
    margin-bottom: 10%;


}


.containerr {
    margin-left:30%;
    margin-top:10%;
    max-width: 30%;
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

.form {
    top: 50%;

}

.form .input {
width: 100%;
background: white;
 border: none;
padding-block: 15px;
margin: 10px auto;
border-radius: 20px;
margin-top: 15px;
 box-shadow: #cff0ff 0px 10px 10px -5px;
border-inline: 2px solid transparent;
    }

.form .input::-moz-placeholder {
color: rgb(170, 170, 170);
 }

.form .input::placeholder {
color: rgb(170, 170, 170);
}

.form .input:focus {
 outline: none;
 border-inline: 2px solid #12B1D1;
}

.form .forgot-password {
display: block;
margin-top: 10px;
margin-left: 10px;
}

.form .forgot-password a {
font-size: 11px;
 color: #0099ff;
text-decoration: none;
}

.form .login-button {
display: block;
width: 100%;
font-weight: bold;
background: linear-gradient(45deg, rgb(16, 137, 211) 0%, rgb(18, 177, 209) 100%);
color: white;
padding-block: 15px;
margin: 20px auto;
border-radius: 20px;
box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 20px 10px -15px;
border: none;
transition: all 0.2s ease-in-out;
 }

.form .login-button:hover {
 transform: scale(1.03);
 box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 23px 10px -20px;
}

.form .login-button:active {
transform: scale(0.95);
box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 15px 10px -10px;
}


.container-fluid{
    left: 100px;
    height: 50px;
    text-align: center;
    font-size: 25px;
}

.movie-list {
            margin-top: 3px;
            border: none;
        }
        
        .movie {
            border: none;
            padding: 0px;
            text-align: center;
        }


        .form-control {
    width: 220px;
    margin: 0 auto;
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

</style>
<body>
<header>
         <nav class="navbar" style=" font-weight: 900;   border-radius: 30px; background-color: #e3f2fd; ">
            <div class="container-fluid" >

                <?php if(!empty($_SESSION['fio'])) :?>

                <ul class="top-menu">

  <li><a href=""><?php echo "".$_SESSION['fio'];?></a></li>

  <li><a href="glavnaya.php">Режим пользователя</a></li>
    <li><a href="glavnaya_admi.php">Главная</a></li>

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
<div class="heading">Добавьте нового пользователя</div>
    
        <form action="vender/reg_user.php" class="form" method="POST">
              <?php if(!empty($_SESSION['fio'])) :?>

                <input required="" class="input" type="text" name="fio" placeholder="ФИО" autocomplete="off">

                <input required="" class="input" type="text" name="login"  placeholder="Логин" autocomplete="off">

                <input required="" class="input" type="password" name="password"   placeholder="Пароль">
                <div class="movie-list">
                    <div class="movie">

                        <select name="rule" style="margin: 20px; border: none;  height: 40px; border-radius: 20px;" >                 
                    <?php 
                    foreach ($rule as $row) {
                         echo "<option>".$row['name']."</option>";
                    }                  
                    ?>

                </select>

                    </div>
                   
                </div>  
                <?php if(isset($_SESSION['message'])) :?>
        <div class="message-box">
            <?php echo $_SESSION['message']; ?>
        </div>
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>            
                <input class='login-button' type='submit' value='Добавить' >

        </form>
</div>
</div>


        <?php endif ?>
        <?php else:
                echo '<h2>Вы что хакер?</h2>';
                echo '<a class="ssilka inputbutton" style="padding:1%;" href="Avtoriz.php">Вернуться</a>';
               
            ?>

        <?php endif ?>
        </main>
</div>

    <footer class="border-top footer text-muted">
        <div class="container">
         
            &copy; 2024 - eChronicle
        </div>
    </footer>
</body>
</html>