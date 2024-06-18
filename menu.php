
<?php require_once 'vender/connect.php';?>
<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>О сайте</title>
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
margin: auto;
margin-bottom: 5%;
    margin-top:4%;
    max-width: 90%;
    background: #F8F9FD;
    background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgb(244, 247, 251) 100%);
    border-radius: 40px;
    padding: 25px 35px;
    border: 5px solid rgb(255, 255, 255);
}

.heading {
    text-align: center;
    font-weight: 900;
    font-size: 30px;
    color: #208F57;
}


.form{
width: 100%;
background: #66aad4;
 border: none;
padding-block: 15px;
margin: 20px auto;
border-radius: 20px;
margin-top: 15px;
 box-shadow: #cff0ff 0px 10px 10px -5px;
border-inline: 2px solid transparent;
  
}

.container-fluid{
    color: #21638A;
    right: 40px;
    height: 50px;
    text-align: center;
    font-size: 25px;
}
table{
  width: 100%;
}
td{
 color: #21638A;
  background: #e3f2fd;
  border-radius: 10px;
  text-align: center;
  font-family: 'EB Garamond';
   font-size: 20px;
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
<div class="heading"> Добро пожаловать на официальный сайт eChronicle! </div>
        <form action="" class="form">
          <table   
          cellpadding="15" cellspacing="20">
            <tr style=" font-weight: 900; font-family: 'EB Garamond'; font-size: 25px;">
              <td>О нас:</td>
              <td> Особенности eChronicle:</td>
            </tr>
            <tr>
              <td>
Мы представляем уникальный школьный дневник eChronicle.
<br> Инновационное решение для учеников, родителей и учителей!</td>
              <td style="padding: 50px;">

Удобное ведение расписания занятий <br>
Возможность отслеживать задания и контрольные работы <br>
Обмен информацией между учителями, учениками и родителями <br>
Уведомления о предстоящих событиях и мероприятиях </td>
            </tr>
            <tr style=" font-weight: 900; font-family: 'EB Garamond'; font-size: 25px;">
              <td> Почему выбирают eChronicle:</td>
              <td>Контакты:</td>
            </tr>
             <tr >
              <td style="padding: 50px;">
Наш дневник объединяет весь школьный процесс в удобном онлайн-формате, <br>сокращая временные затраты на организацию учебного процесса! </td>
              <td>
Телефон: +123-456-7890 <br>
Электронная почта: info@echronicle.com </td>
            </tr>
          </table>
        </form>
</div>
</div>
        </main>
</div>

<footer class="border-top footer text-muted">
        <div class="container">
            &copy; 2024 - eChronicle - <a href="menu.php" >О сайте</a>
        </div>
</footer>

</body>
</html>