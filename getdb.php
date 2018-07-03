<?php
header("Content-type: text/html; charset=UTF-8");
$dbmanager = new mysqli('127.0.0.1', 'root', '', 'db_student_admin', '3306');
$sqlscore = "SELECT * FROM student_score";
//所有的成绩表
$dbmanager -> query("SET CHARACTER SET 'utf8'");
//读库
$resultscore = $dbmanager -> query($sqlscore);
//
//$dbmanager->query("SET NAMES 'utf8'");//写库
$rowscore = $resultscore -> fetch_all();
//以数组形式返回学生成绩表
echo json_encode($rowscore);

?>