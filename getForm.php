<?php
  $mysql_host = '';
  $mysql_user = '';
  $mysql_password = '';
  $mysql_db = '';
  $conn;
  $dbconn;
class getForm{
  function __construct(){
      $mysql_host = 'localhost:3306';
      $mysql_user = 'root';
      $mysql_password = 'emsys$$$';
      $mysql_db = 'kyu_db';
      $conn = mysql_connect($mysql_host, $mysql_user, $mysql_password);
      $dbconn = mysql_select_db($mysql_db, $conn);
      mysql_query("set names utf8");
  }

  // 등록된 교수의 전체 검색
  function select_professor_list(){
    try{
      $query = "SELECT * FROM professor_tb WHERE category=\"professor\"";
      $result = mysql_query($query);
      return $result;
    }catch(Exception $e){
      echo $e;
    }
  }

  // 등록된 교수의 id 및 이름만 검색
  function select_professor_name_list(){
    try{
      $query = "SELECT id,name FROM professor_tb WHERE category=\"professor\"";
      $result = mysql_query($query);
      return $result;
    }catch(Exception $e){
      echo $e;
    }
  }

  // id에 맞는 교수 검색
  function select_professor_id_list($id){
    try{
      $query = "SELECT * FROM professor_tb WHERE category=\"professor\" AND id=".$id;
      $result = mysql_query($query);
      return $result;
    }catch(Exception $e){
      echo $e;
    }
  }

  // 교수 등록
  function add_professor($_name, $_position, $_address, $_phone, $_fax, $_email,$_department, $_image, $_category, $_biography, $_research_interests, $_professional_experiences, $_awards_and_honors){
    $query = "INSERT INTO professor_tb(name, position, address, phone, fax, email, department,image,category, biography, research_interests, professional_experiences, awards_and_honors) VALUES (\"$_name\", \"$_position\", \"$_address\", \"$_phone\", \"$_fax\", \"$_email\",\"$_department\", \"$_imge\", \"$_category\", \"$_biography\", \"$_research_interests\", \"$_professional_experiences\", \"$_awards_and_honors\");";
    $result = mysql_query($query);
    if(strcmp($result,"true")){
      echo '<script>
            alert("추가되었습니다.");
            location.replace("/page/admin/peoples/professor.php");</script>';
    }
  }

  // 교수 삭제
  function remove_professor($id){
    $query = "DELETE FROM professor_tb WHERE id=".$id;
    $result = mysql_query($query);if(strcmp($result,"true")){
      echo '<script>
              location.replace("/page/admin/peoples/professor.php");
              alert("삭제되었습니다.");
            </script>';
    }
  }

  // 등록된 연구원 검색
  function select_researcher_list(){
    try{
      $query = "SELECT * FROM professor_tb WHERE category=\"researcher\"";
      $result = mysql_query($query);
      return $result;
    }catch(Exception $e){
      echo $e;
    }
  }

  // 등록된 학생 검색
  function select_student_list(){
    try{
      $query = "SELECT * FROM professor_tb WHERE category=\"student\"";
      $result = mysql_query($query);
      return $result;
    }catch(Exception $e){
      echo $e;
    }
  }

  // 등록된 졸업생 검색
  function select_alumni_list(){
    try{
      $query = "SELECT * FROM professor_tb WHERE category=\"alumni\"";
      $result = mysql_query($query);
      return $result;
    }catch(Exception $e){
      echo $e;
    }
  }

  // 등록된 paper 검색
  function select_paper_list(){
    try{
      $query = "SELECT * FROM paper_tb";
      $result = mysql_query($query);
      return $result;
    }catch(Exception $e){
      echo $e;
    }
  }
}
?>
