<?php require_once 'vender/connect.php';?>
<?php
session_start();
?>
<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Цифровой Дневник</title>
    <link rel="stylesheet" type="style/css" href="stile.css">
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


a {
  color: #0077cc;
}


.border-top {
  border-top: 1px solid #e5e5e5;
}
.border-bottom {
  border-bottom: 1px solid #e5e5e5;
}

.box-shadow {
  box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
}

button.accept-policy {
  font-size: 1rem;
  line-height: inherit;
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
    text-align: center;
    font-weight: 900;
    font-size: 30px;
    color: rgb(16, 137, 211);
}

.form {
    margin-top: 20px;

}


.form .input {
width: 100%;
background: white;
 border: none;
padding-block: 15px;
margin: 20px auto;
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
    right: 40px;
    height: 50px;
    text-align: center;
    font-size: 25px;
}
</style>
<body>
    <header>
         <nav class="navbar" style=" font-weight: 900;   border-radius: 30px; background-color: #e3f2fd; font-family: 'EB Garamond', serif; font-size:22px ; ">
            <div class="container-fluid">
                <a class="navbar-brand"  style="background-color: #e3f2fd;  serif;  font-size:25px ;">eChronicle</a>
                <a class="navbar-brand" href="Avtoriz.php" asp-area="" style="padding-left:50px; ">Авторизация</a>
                <a class="navbar-brand" href="menu.php" asp-area="" style="padding-left:50px; ">О сайте</a>
            </div>
        </nav>
    </header>
<div class="container">
        <main role="main">
<div class="text-center">
<div class="containerr">
<div class="heading">Добро пожаловать</div>
        <form action="vender/avtoriz.php" class="form" method="POST">
            <input required="" class="input" type="text" name="login" id="login" placeholder="Логин" autocomplete="off">
          
            <input required="" class="input" type="password" name="password" id="password" placeholder="Пароль">
            
            <input class='login-button' type='submit' value='Войти' >
             </form>
</div>
</div>
        </main>
</div>

    <footer class="border-top footer text-muted">
        <div class="container">
            &copy; 2024 - eChronicle - <a asp-area="" asp-controller="Home" href="menu.php" asp-action="Privacy">О сайте</a>
        </div>
    </footer>
</body>
</html>
