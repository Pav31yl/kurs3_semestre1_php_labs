<?php
session_start();
echo $_SESSION['FIO'];

?>

<html>
 <head>
  <meta charset="utf-8">
  <title>Главная</title>
  <link rel="stylesheet" href="../css/MAIN.css" type="text/css">
 </head>
 <body>
 <?php require 'header.php'?>

 <div class="labs_cont">
        <div>
            <a class="labs_row" href ="http://localhost/pap/index.php">Лабораторная работа №1</a>
        </div>
        <div>
            <a class="labs_row" href ="http://localhost/php2/index.php">Лабораторная работа №2</a>
        </div>
        <div>
            <a class="labs_row" href ="http://localhost/php3/index.php">Лабораторная работа №3</a>
        </div>
        <div>
            <a class="labs_row" href ="http://localhost/php4/index.php">Лабораторная работа №4-5</a>
        </div>
        <div>
            <a class="labs_row" href ="http://localhost/php6/index.php">Лабораторная работа №6-7</a>
        </div>
        <div>
            <a class="labs_row" href ="http://localhost/php8/index.php">Лабораторная работа №8</a>
        </div>
        <div>
            <a class="labs_row" href ="http://localhost/php10/index.php">Лабораторная работа №10</a>
        </div>    
          <div>
            <a class="labs_row" href ="http://localhost/php11/index.php">Лабораторная работа №11</a>
        </div>   
           <div>
            <a class="labs_row" href ="http://localhost/php12/index.php">Лабораторная работа №12</a>
        </div>   
           <div>
            <a class="labs_row" href ="http://localhost/php13/index.php">Лабораторная работа №13</a>
        </div>
        <div>
            <a class="labs_row" href ="http://localhost/php14/index.php">Лабораторная работа №14</a>
        </div>
        <div>
            <a class="labs_row" href ="http://localhost/php15/index.php">Лабораторная работа №15</a>
        </div>
        <form action="autorisation.php" method="post" class="form">
            <input type="hidden" name="log-out" value="5">
            <input type="submit" class="button" value="Выйти...">
        </form>
        <?php require 'footer.php'?>
 </body>
</html>