<?php
session_start();

//класс для редактирования задач
require_once("MathTests.php");
$mathTests = new MathTests();

//выбор действия: удаление, создание, вывод списка
if(isset($_POST['delete']) && $_POST['delete'] == 'true') {
    $mathTests->deleteSum();
} else if(isset($_POST) && count($_POST) > 3) {
    $mathTests->createSum();
} else {
    $mathTests->listSums();
}

