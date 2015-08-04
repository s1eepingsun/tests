<?php
require_once("ConnectionDB.php");

class MathTests
{
    public function listSums()
    {
        $connectionDB = ConnectionDB::getInstance();
        $mysqli = $connectionDB::connect();
        $query = Mysqli_query ($mysqli, 
            "SELECT sums.id, sums.sum, sums.answer1, sums.answer2, sums.answer3, sums.answer4, answers.answer 
            FROM math_sums AS sums LEFT JOIN math_correct_answers AS answers ON sums.id = answers.sum_id
        "); 

        $rows = array();
        while($row = mysqli_fetch_assoc($query)) {
            $rows[] = $row;
        }

        $sums = json_encode($rows);
        echo $sums;
    }
    
    public function createSum()
    {
        $connectionDB = ConnectionDB::getInstance();
        $mysqli = $connectionDB::connect();
        $data = $_POST;
        $response = '';
        
        if(count($data) == 6) {
            if (!mysqli_set_charset($mysqli, "utf8")) {
                printf("Ошибка при загрузке набора символов utf8: ", mysqli_error($mysqli));
            }
            
            $data['sum'] = mysqli_real_escape_string($mysqli, $data['sum']);
            $data['answer1'] = mysqli_real_escape_string($mysqli, $data['answer1']);
            $data['answer2'] = mysqli_real_escape_string($mysqli, $data['answer2']);
            $data['answer3'] = mysqli_real_escape_string($mysqli, $data['answer3']);
            $data['answer4'] = mysqli_real_escape_string($mysqli, $data['answer4']);
            $data['answer'] = mysqli_real_escape_string($mysqli, $data['answer']);
        } else {
            exit('Все поля должны быть заполнены');
        }  
        
        $query = Mysqli_query($mysqli, "INSERT INTO math_sums (id, sum, answer1, answer2, answer3, answer4)
        VALUES (NULL, '".$data['sum']."', '".$data['answer1']."', '".$data['answer2']."', '".$data['answer3']."', '".$data['answer4']."')");
        
        if($query) {
            $response .= 'Inserted into math_sums. ';
        } else {
            exit(mysqli_error($mysqli));
        }
        
        $sumID = mysqli_insert_id($mysqli);
        $query = Mysqli_query ($mysqli, "INSERT INTO math_correct_answers VALUES (NULL, ".$sumID.", ".$data['answer'].")");
                
        if($query) {
            $response .= 'Inserted into math_correct_answers. ';
        } else {
            exit(mysqli_error($mysqli));
        }
        
        echo $response; 
    }
    
    public function deleteSum()
    {
        $connectionDB = ConnectionDB::getInstance();
        $mysqli = $connectionDB::connect();
        $id = $_POST['id'];
        $response = '';
        
        $query = Mysqli_query($mysqli, "DELETE FROM math_sums WHERE id = ". $id);
        if($query) {
            $response .= 'Deleted test '. $id .'from math_sums. ';
        } else {
            exit(mysqli_error($mysqli));
        }
        
        $query = Mysqli_query($mysqli, "DELETE FROM math_correct_answers WHERE sum_id = ". $id);
        if($query) {
            $response .= 'Deleted test '. $id .'from math_correct_answers. ';
        } else {
            exit(mysqli_error($mysqli));
        }
        
        echo $response;
    }
}


