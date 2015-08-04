<?php
require_once("ConnectionDB.php");

class TestsClient
{    
    public function getNextTest()
    {
        $table = 'math_sums';
        $sumNumber = $_GET['sumNumber'];
        $connectionDB = ConnectionDB::getInstance();
        $mysqli = $connectionDB::connect();
        
        $query = Mysqli_query($mysqli, "
            SELECT `id`, `sum`, `answer1`, `answer2`, `answer3`, `answer4` FROM $table WHERE `id`>=$sumNumber
        ");

        if($query) {
            $sumData = mysqli_fetch_assoc($query);
            $sumData = json_encode($sumData);
            echo $sumData;
        } else {
            echo 'error; ' . mysqli_error($mysqli);
        }

    }
    
    public function getMaxID()
    {
        $connectionDB = ConnectionDB::getInstance();
        $mysqli = $connectionDB::connect();
        
        $query = Mysqli_query($mysqli, "
            SELECT MAX(`id`) FROM `math_sums`
        ");
        
        if($query) {
            $max = mysqli_fetch_row($query);
            return $max[0];
        } else {
            echo 'error; ' . mysqli_error($mysqli);
        }
        
    }
    
    public function getResult()
    {
        $connectionDB = ConnectionDB::getInstance();
        $mysqli = $connectionDB::connect();
        $table = 'math_correct_answers';
        $allAnswers = array();
        
        $query = Mysqli_query($mysqli, "
            SELECT `sum_id`, `answer` FROM $table
        ");
        
        while($row = mysqli_fetch_assoc($query)) {
            $allAnswers[$row['sum_id']] = $row['answer'];
        }

        $resultArray = array_intersect_assoc($allAnswers, $_SESSION['answers']);
        $data = array();
        $data['correctAnswers'] = count($resultArray);
        $data['allAnswers'] = count($allAnswers);
        $data = json_encode($data);
        echo $data;
    }
}