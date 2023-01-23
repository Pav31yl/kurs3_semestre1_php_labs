<html>

<head>
    <meta charset="UTF-8">
</head>
   <?php require 'header.html' ?>
<body>
 
   
<div style="top: 13%; left: 44%; position: absolute;">
    <?php
    session_start();
    $_SESSION['FIO'] = "Khrapko Pavel Dmitrievich";
    echo $_SESSION['FIO'];
    ?>
    </div>
    <form action="91.php" method="POST">
        <input style="border: solid black 3px; color: black; top: 20%; left: 35%; position: absolute;
         height: 50px; width: 200px" type=submit value="Задание 1">
    </form>
    <form action="92.php" method="POST">
        <input style="border: solid black 3px; color: black; top: 20%; left: 50%; position: absolute;
         height: 50px; width: 200px" type=submit value="Задание 2">
    </form>
    <form action="93.php" method="POST">
        <input style="border: solid black 3px; color: black; top: 35%; left: 35%; position: absolute;
         height: 50px; width: 200px" type=submit value="Задание 3">
    </form>
    <form action="94.php" method="POST">
        <input style="border: solid black 3px; color: black; top: 35%; left: 50%; position: absolute;
         height: 50px; width: 200px" type=submit value="Задание 4">
    </form>
    <form action="close.php" method="POST">
        <input style="border: solid black 3px; color: black; top: 50%; left: 43%; position: absolute;
         height: 50px; width: 200px" type=submit value="Удалить сессию">
    </form>
</body>
 <?php include 'footer.html' ?>
</html>