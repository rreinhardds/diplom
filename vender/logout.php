<?php
session_start();
unset($_SESSION['fio']);
header('Location: ../Avtoriz.php');