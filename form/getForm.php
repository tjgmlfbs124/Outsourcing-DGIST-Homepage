<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/pdo.php';
class getForm{
	function __construct(){}

	// 교수 전체를 반환
	function select_peoples($cat){
		try{
			$pdo = $GLOBALS["pdo"];
			$stmt = $pdo->prepare("SELECT * FROM people_tb WHERE category=\"".$cat."\"");
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
	}
	// 교수 전체를 반환
	function select_people($cat, $id){
		try{
			$pdo = $GLOBALS["pdo"];
			$stmt = $pdo->prepare("SELECT * FROM people_tb WHERE category=\"".$cat."\" AND id=".$id);
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

	// paper의 행 개수검색
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

	// 공지사항 목록 조회
	function select_notices($page){
    try{
			$pdo = $GLOBALS["pdo"];
      $stmt = $pdo->prepare("
				SELECT A.* FROM (
					SELECT
						@ROWNUM := @ROWNUM + 1 AS ROWNUM,
						notice_tb.*
					FROM
						notice_tb,
						(SELECT @ROWNUM := 0) R
					ORDER BY date DESC
				)AS A
				WHERE ROWNUM BETWEEN ((10*$page)-10) AND (10*$page)
				");
      $stmt->execute();
      return $stmt;
    }catch(Exception $e){
      echo $e;
    }
	}

	// id에 해당하는 공지사항 조회
	function select_notice($id){
    try{
			$pdo = $GLOBALS["pdo"];
      $stmt = $pdo->prepare("SELECT * FROM notice_tb WHERE id=".$id);
      $stmt->execute();
      return $stmt;
    }catch(Exception $e){
      echo $e;
    }
	}

	// notice의 행 개수 검색
	function select_notices_count(){
    try{
			$pdo = $GLOBALS["pdo"];
      $stmt = $pdo->prepare("
				SELECT COUNT(*) AS CNT FROM notice_tb
			");
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_BOTH);
    }catch(Exception $e){
      echo $e;
    }
	}
}
?>
