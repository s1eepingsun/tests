<?php
session_start();
require_once("TestsClient.php");//класс для решения задач клиентом

//запись ответов в сессию, очитка сессии
$sumNumber = $_GET['sumNumber'];
$answer = $_GET['answer'];
if($answer != 0) {
    $_SESSION['answers'][$sumNumber - 1] = $answer;
} else if($answer == 0) {
    unset($_SESSION['answers']);
}

$testsClient = new TestsClient();

$max = $testsClient->getMaxID();

//если id последний в списке - выводить результат, иначе - следующий вопрос теста 
if($max == $sumNumber - 1) {
    $testsClient->getResult();
} else {
    $testsClient->getNextTest();
}
