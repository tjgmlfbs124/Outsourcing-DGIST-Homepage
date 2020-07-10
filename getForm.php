<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/pdo.php';
class getForm{
	function __construct(){

	}

  // 등록된 교수의 전체 검색
  function select_professor_list(){
    try{
      $pdo = $GLOBALS["pdo"];
      $stmt = $pdo->prepare("SELECT * FROM professor_tb WHERE category=\"professor\"");
      $stmt->execute();
      return $stmt;
    }catch(Exception $e){
    echo $e;
    }
  }

  // 등록된 교수의 id 및 이름만 검색
  function select_professor_name_list(){
    try{
      $query = "SELECT id,name FROM professor_tb WHERE category=\"professor\"";
      $result = mysqli_query($conn, $query);
      return $result;
    }catch(Exception $e){
      echo $e;
    }
  }

  // id에 맞는 교수 검색
  function select_professor_id_list($id){
    try{
      $query = "SELECT * FROM professor_tb WHERE category=\"professor\" AND id=".$id;
      $result = mysqli_query($conn, $query);
      return $result;
    }catch(Exception $e){
      echo $e;
    }
  }

  // 교수 등록
  function add_professor($_name, $_position, $_address, $_phone, $_fax, $_email,$_department, $_image, $_category, $_biography, $_research_interests, $_professional_experiences, $_awards_and_honors){
    $_biography = str_replace("\r\n","&br&",$_biography);
    $_research_interests = str_replace("\r\n","&br&",$_research_interests);
    $_professional_experiences = str_replace("\r\n","&br&",$_professional_experiences);
    $_awards_and_honors = str_replace("\r\n","&br&",$_awards_and_honors);
    $query = "INSERT INTO professor_tb(name, position, address, phone, fax, email, department,image,category, biography, research_interests, professional_experiences, awards_and_honors) VALUES (\"$_name\", \"$_position\", \"$_address\", \"$_phone\", \"$_fax\", \"$_email\",\"$_department\", \"$_image\", \"$_category\", \"$_biography\", \"$_research_interests\", \"$_professional_experiences\", \"$_awards_and_honors\");";
    $result = mysqli_query($conn, $query);
    if(strcmp($result,"true")){
      echo '<script>
            alert("추가되었습니다.");
            location.replace("/page/admin/peoples/professor.php");
            </script>';
    }
  }

  // 교수 업데이트
  function update_professor($_id, $_name, $_position, $_address, $_phone, $_fax, $_email,$_department, $_image, $_category, $_biography, $_research_interests, $_professional_experiences, $_awards_and_honors){
    $_biography = str_replace("\r\n","&br&",$_biography);
    $_research_interests = str_replace("\r\n","&br&",$_research_interests);
    $_professional_experiences = str_replace("\r\n","&br&",$_professional_experiences);
    $_awards_and_honors = str_replace("\r\n","&br&",$_awards_and_honors);
    echo $_image;
    // 이미지가 있을경우 이미지도 업데이트
    if(isset($_image)){
      $query = "UPDATE professor_tb SET name=\"$_name\", position=\"$_position\", address=\"$_address\", phone=\"$_phone\", email=\"$_email\", department=\"$_department\", image=\"$_image\", category=\"$_category\", biography=\"$_biography\", research_interests=\"$_research_interests\", professional_experiences=\"$_professional_experiences\", awards_and_honors=\"$_awards_and_honors\" WHERE id=\"$_id\"";
    }

    // 이미지가 없을경우, 원래 이미지 사용을 위해 이미지 빼고 업데이트
    else{
      $query = "UPDATE professor_tb SET name=\"$_name\", position=\"$_position\", address=\"$_address\", phone=\"$_phone\", email=\"$_email\", department=\"$_department\", category=\"$_category\", biography=\"$_biography\", research_interests=\"$_research_interests\", professional_experiences=\"$_professional_experiences\", awards_and_honors=\"$_awards_and_honors\" WHERE id=\"$_id\"";
    }
    $result = mysqli_query($conn, $query);
    if(strcmp($result,"true")){
      echo '<script>
            alert("변경되었습니다.");
            location.replace("/page/admin/peoples/professor.php?category=professor");
            </script>';
    }
  }


  // 교수 삭제
  function remove_professor($id){
    $query = "DELETE FROM professor_tb WHERE id=".$id." AND category=professor";
    $result = mysqli_query($conn, $query);if(strcmp($result,"true")){
      echo '<script>
              location.replace("/page/admin/peoples/professor.php?category=professor");
              alert("삭제되었습니다.");
            </script>';
    }
  }

  // 카테고리에 맞는 등록된 사람 검색
  function select_etc_list($category){
    try{
			$pdo = $GLOBALS["pdo"];
      $stmt = $pdo->prepare("SELECT * FROM professor_tb WHERE category=:category");
			$stmt->bindParam(':category',$category);
      $stmt->execute();
      return $stmt;
    }catch(Exception $e){
      echo $e;
    }
  }

  // id에 맞는 사람 검색
  function select_etc_id_list($category, $id){
    try{
      $query = "SELECT * FROM professor_tb WHERE category=\"$category\" AND id=".$id;
      $result = mysqli_query($conn, $query);
      return $result;
    }catch(Exception $e){
      echo $e;
    }
  }

  // id에 맞는 사람 삭제
  function remove_etc_id_remove($category, $id){
    $query = "DELETE FROM professor_tb WHERE id=".$id." AND category=\"$category\"";
    $result = mysqli_query($conn, $query);
    if(strcmp($result,"true")){
      echo '<script>
              location.replace("/page/admin/peoples/researcher.php?category='.$category.'");
              alert("삭제되었습니다.");
            </script>';
    }
  }

  // 사람등록
  function add_etc($_name, $_position, $_address, $_phone, $_fax, $_email,$_department, $_image, $_category){
    echo $_department."<br>";
    $query = "INSERT INTO professor_tb(name, position, address, phone, fax, email, department,image, category) VALUES (\"$_name\", \"$_position\", \"$_address\", \"$_phone\", \"$_fax\", \"$_email\",\"$_department\", \"$_image\", \"$_category\");";
    $result = mysqli_query($conn, $query);
    if(strcmp($result,"true")){
      echo '<script>
            alert("추가되었습니다.");
            location.replace("/page/admin/peoples/'.$_category.'.php?category='.$_category.'");
            </script>';
    }
  }

  // 사람 업데이트
  function update_etc($_id, $_name, $_position, $_address, $_phone, $_fax, $_email,$_department, $_image, $_category){
    // 이미지가 있을경우 이미지도 업데이트
    if(isset($_image)){
      $query = "UPDATE professor_tb SET name=\"$_name\", position=\"$_position\", address=\"$_address\", phone=\"$_phone\", email=\"$_email\", department=\"$_department\", image=\"$_image\", category=\"$_category\" WHERE id=\"$_id\"";
    }
    // 이미지가 없을경우, 원래 이미지 사용을 위해 이미지 빼고 업데이트
    else{
      $query = "UPDATE professor_tb SET name=\"$_name\", position=\"$_position\", address=\"$_address\", phone=\"$_phone\", email=\"$_email\", department=\"$_department\", category=\"$_category\" WHERE id=\"$_id\"";
    }
    $result = mysqli_query($conn, $query);
    if(strcmp($result,"true")){
      echo '<script>
            alert("변경되었습니다.");
            location.replace("/page/admin/peoples/'.$_category.'.php?category='.$_category.'");
            </script>';
    }
  }

  // 등록된 학생 검색
  function select_student_list(){
    try{
			$pdo = $GLOBALS["pdo"];
      $stmt = $pdo->prepare("SELECT * FROM professor_tb WHERE category=\"student\"");
      $stmt->execute();
      return $stmt;
    }catch(Exception $e){
      echo $e;
    }
  }

  // 등록된 졸업생 검색
  function select_alumni_list(){
    try{
      $query = "SELECT * FROM professor_tb WHERE category=\"alumni\"";
      $result = mysqli_query($conn, $query);
      return $result;
    }catch(Exception $e){
      echo $e;
    }
  }

  // 등록된 paper 검색
  function select_paper_list(){
    try{
      $query = "SELECT * FROM paper_tb";
      $result = mysqli_query($conn, $query);
      return $result;
    }catch(Exception $e){
      echo $e;
    }
  }
}
?>
