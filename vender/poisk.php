<?php require_once 'connect.php';?>
<?php session_start();?>
                 
                  <?php   
                  $id = $_GET['id'];
                  $query = $_GET['query'];
                  $rows = $dbh->query("SELECT * FROM users WHERE REPLACE(LOWER(fio), ' ', '') LIKE REPLACE(LOWER('%$query%'), ' ', '')");
               header('Location:../update_users.php');
                    
 ?>