<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/pdo.php';
class getForm{
	function __construct(){}

	// 교수 전체를 반환
	function select_professors(){
    try{
			$pdo = $GLOBALS["pdo"];
      $stmt = $pdo->prepare("SELECT * FROM professor_tb");
      $stmt->execute();
      return $stmt;
    }catch(Exception $e){
      echo $e;
    }
	}

	// id값으로 한명의 교수정보 반환
	function select_professor($id){
    try{
			$pdo = $GLOBALS["pdo"];
      $stmt = $pdo->prepare("SELECT * FROM professor_tb WHERE id=".$id);
      $stmt->execute();
      return $stmt;
    }catch(Exception $e){
      echo $e;
    }
	}

	// Journel 검색
	function select_papers($category, $page){
    try{
			$pdo = $GLOBALS["pdo"];
      $stmt = $pdo->prepare("
				SELECT A.* FROM (
					SELECT
						@ROWNUM := @ROWNUM + 1 AS ROWNUM,
						paper_tb.*
					FROM
						paper_tb,
						(SELECT @ROWNUM := 0) R
					WHERE
						category=\"$category\"
				)AS A
				WHERE ROWNUM BETWEEN ((10*$page)-10) AND (10*$page);
			");
      $stmt->execute();
      return $stmt;
    }catch(Exception $e){
      echo $e;
    }
	}

	// papaer의 행 개수검색
	function select_papers_count($category){
    try{
			$pdo = $GLOBALS["pdo"];
      $stmt = $pdo->prepare("
				SELECT COUNT(*) AS CNT FROM paper_tb WHERE category=\"$category\";
			");
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_BOTH);
    }catch(Exception $e){
      echo $e;
    }
	}
}
?>
