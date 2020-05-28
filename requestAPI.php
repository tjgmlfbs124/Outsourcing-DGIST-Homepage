<?php
  $mysql_host = '';
  $mysql_user = '';
  $mysql_password = '';
  $mysql_db = '';
  $conn;
  $dbconn;
class RequestAPI{
  function __construct(){
      $mysql_host = 'localhost:3306';
      $mysql_user = 'root';
      $mysql_password = 'emsys$$$';
      $mysql_db = 'kyu_db';
      $conn = mysql_connect($mysql_host, $mysql_user, $mysql_password);
      $dbconn = mysql_select_db($mysql_db, $conn);
      mysql_query("set names utf8");
  }

  // 등록된 교수 검색
  function select_professor_list(){
    try{
      $query = "select * from professor_tb where category=\"professor\"";
      $result = mysql_query($query);
      return $result;
    }catch(Exception $e){
      echo $e;
    }
  }

  // 등록된 연구원 검색
  function select_researcher_list(){
    try{
      $query = "select * from professor_tb where category=\"researcher\"";
      $result = mysql_query($query);
      return $result;
    }catch(Exception $e){
      echo $e;
    }
  }

  // 등록된 학생 검색
  function select_student_list(){
    try{
      $query = "select * from professor_tb where category=\"student\"";
      $result = mysql_query($query);
      return $result;
    }catch(Exception $e){
      echo $e;
    }
  }

  // 등록된 졸업생 검색
  function select_alumni_list(){
    try{
      $query = "select * from professor_tb where category=\"alumni\"";
      $result = mysql_query($query);
      return $result;
    }catch(Exception $e){
      echo $e;
    }
  }

  // 등록된 paper 검색
  function select_paper_list($paper){
    try{
      $query = "select * from paper_tb";
      $result = mysql_query($query);
      return $result;
    }catch(Exception $e){
      echo $e;
    }
  }
}
?>
