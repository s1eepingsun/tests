<?php
if (mysql_connect("localhost", "kirill", "123")) {echo "connected <br>";}
 
if (mysql_select_db("test")) {echo "db selected <br>";}
 
    
/*  $query = Mysql_query ("
 CREATE TABLE IF NOT EXISTS `math_sums_answers` (
  `id` INT(7) NOT NULL AUTO_INCREMENT,
  `answer` VARCHAR(255) NOT NULL,
  `result` INT(3) NOT NULL,
  `time_start` TIMESTAMP DEFAULT 0,
  `time_end` TIMESTAMP DEFAULT 0,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 
"); */

 /*  $query = Mysql_query ("
 CREATE TABLE IF NOT EXISTS `math_correct_answers` (
  `id` INT(7) NOT NULL AUTO_INCREMENT,
  `sum_id` INT(3) NOT NULL,
  `answer` INT(3) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 
"); */

 /* $query = Mysql_query ("
 INSERT INTO `math_correct_answers` VALUES (NULL, 3, 3)
 ");  */

/*  $query = Mysql_query ("
CREATE TABLE `timestamp_example` (
`id`                  INTEGER(10) UNSIGNED AUTO_INCREMENT,      
`some_text_field`     VARCHAR(20),
`updated_at`          TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
`created_at`          DATETIME DEFAULT NULL,
PRIMARY KEY (id)
)"); */

 /*  $query = Mysql_query ("
 INSERT INTO `math_sums` VALUES (NULL,'3 * 4', 10, 11, 12, 13, 3)
 ");    */

 /* $query = Mysql_query ("
 SELECT MAX(`id`) FROM `math_sums`
 ");   */
 
/*  $query = Mysql_query ("
    SELECT sums.id, sums.sum, sums.answer1, sums.answer2, sums.answer3, sums.answer4, answers.answer 
    FROM math_sums AS sums LEFT JOIN math_correct_answers AS answers ON sums.id = answers.sum_id
");  */
$data = array();
$data['sum'] = 'asdf';
$data['answer1'] = 'aa';
$data['answer2'] = 'ss';
$data['answer3'] = 'dd';
$data['answer4'] = 'ff';

/* $query = Mysql_query("
INSERT INTO math_sums (id, sum, answer1, answer2, answer3, answer4) VALUES(NULL, 1, 'as', 3, 4, 5)
"); */
/* $query = Mysql_query("
DELETE FROM math_sums WHERE id = 7;
"); */

 
if($query) {
    echo 'table created <br>';
    /* while($row = mysql_fetch_assoc($query)) {
        print_r($row);
        echo '<br>';
    } */
} else {
    echo 'error; ' . mysql_error() . ' ' . mysql_errno();
}
  

/* 
if (mysql_connect("localhost", "kirill", "123")) {echo "connected <br>";}
 
if (mysql_select_db("book")) {echo "db selected <br>";}
 
   
 $query = Mysql_query ("
 ALTER TABLE `actions` MODIFY `breath` INT(4) NOT NULL DEFAULT 0

"); 


if($query) {
    echo 'table created';
} else {
    echo 'error; ' . mysql_error();
}
     */

/*  
 ,
INSERT INTO `fruits` VALUES (NULL,'orange','orange',25, 5),     // can you do 1 at a time!
INSERT INTO `fruits` VALUES (NULL,'persimmon','orange',24, 4)
 INSERT INTO `fruits` VALUES ('','Australia',18886000);
  */
 
/*  
 CREATE TABLE IF NOT EXISTS `fruits` (
  `id` INT(7) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` CHAR(52) NOT NULL,
  `color` CHAR(20) NOT NULL DEFAULT '',
  `weight` INT(11) NOT NULL DEFAULT '0',
  `somedata1` INT(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 
  */
 
 
 
 
 
 
 
/*     
 Mysql_query ( 
"    
CREATE TABLE IF NOT EXISTS
 
  `actions` (
 `time` int(7) NOT NULL AUTO_INCREMENT, 
 `go_north` varchar(12) NOT NULL default '', 
 `go_south` varchar(12) NOT NULL default '', 
 `go_west` varchar(12) NOT NULL default '', 
 `go_east` varchar(12) NOT NULL default '', 
 `close_eyes` varchar(12) NOT NULL default '', 
 `open_eyes` varchar(12) NOT NULL default '',
 `eat` varchar(12) NOT NULL default '',
 PRIMARY KEY(`time`)
 ) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COLLATE cp1251_general_ci ;
  ")
      */
	
/* 	 Mysql_query ( 
"  
 CREATE TABLE
	    `users` (
	        `id` INT(11) NOT NULL AUTO_INCREMENT,
	        `name` CHAR(30) NOT NULL,
	        `age` SMALLINT(6) NOT NULL,
	        PRIMARY KEY(`id`)
	    ) 
	")	 */
		
 /*  
   Mysql_query ( 
"    
ALTER TABLE vision
 
 ADD COLUMN  v30  varchar(12)
 ;
  ");
   */
  //echo " end";
  
  
  
  /* 
   ADD COLUMN  v03  varchar(12) , 
 ADD COLUMN  v12  varchar(12) , 
 ADD COLUMN  v2_2  varchar(12) AFTER v10
  */
  

/*     if (mysql_connect("mysql12.000webhost.com", "a8155305_k", "12samuel")) {echo "connected <br>";}

  if (mysql_select_db("a8155305_gb")) {echo "db selected <br>";}
  

 Mysql_query (

"   

CREATE TABLE

  comments (

 `id` int(4) NOT NULL,

 `name` varchar(65) NOT NULL default '',


 `comment` longtext NOT NULL,

 `datetime` varchar(65) NOT NULL default ''


 ) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COLLATE cp1251_general_ci ;

  ") */

?> 