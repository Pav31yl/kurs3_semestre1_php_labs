<?php
$host = "localhost"; // адрес сервера
$database = "mini_shop"; // имя базы данных
$user = "root"; // имя пользователя
$password = ""; // пароль
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка ".mysqli_error($link));


if(isset($_POST['Add'])){
    $name = $_POST['Add'];
    
    mysqli_query($link, "insert into categories(cat_id, cat_name) values (null, '$name')");
}

if(isset($_POST['Remove'])){
    $id = (int) $_POST['Remove'];

    mysqli_query($link, "Delete from categories where categories.cat_id = $id");
}

if(isset($_POST['Old'])){
    $old = $_POST['Old'];
    $new = $_POST['New'];

    mysqli_query($link, "update categories set cat_name = '$new' where categories.cat_name = '$old'");
}
?>
<div class='listContainer'>
<?php

    $categories_Names = mysqli_query($link, 'select * from categories');
    for ($i = 0 ; $i < mysqli_num_rows($categories_Names); ++$i) {
        $row = mysqli_fetch_assoc($categories_Names);
        echo "<div class='list'>".$row['cat_id'].'. '.$row['cat_name']."</div>";
    }
?>
</div>
<br><br><br>
<div class='FormContainer'>
<form name='FormAdd' action="index.php" method="post">
     Добавление категории<br>
    <input type="text" name='Add' required>
    <button>Отправить</button>
</form>

<form name='FormDelete' action="index.php" method="post">
     Удаление категории<br>
    <input type="text" name='Remove' required>
    <button>Отправить</button>
</form>

<form name='FormDelete' action="index.php" method="post">
     Изменить название с<br>
    <input type="text" name='Old' required><br>
     на<br>
    <input type="text" name='New' required>
    <button>Отправить</button>
</form>
</div>
<form action="page2.php" method="POST">
        <input  type=submit value="На 2-ую страницу">
    </form>
