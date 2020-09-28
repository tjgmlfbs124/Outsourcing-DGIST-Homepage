<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/pdo.php';


function renderView($msg, $url){
	echo '<script>
				alert("'.$msg.'");
				location.replace("'.$url.'");
				</script>';
}

class getForm{
	function __construct(){}

	function add_people($kr_name, $en_name, $_position, $_address, $_phone, $_fax, $_email,$_department, $_image, $_category, $cv, $cvfile){
		try{
			$cv = str_replace("\r\n","<br>",$cv);

			$query = "insert into people_tb(kr_name, en_name, position, address, phone, fax, email, department ";
			if(isset($_image)){
				$query = $query.",image ";
			}
			$query = $query.", category, cv";
			if(isset($cvfile)){
				$query = $query.",cv_file ";
			}
			$query = $query.") ";
			$query = $query." VALUES(\"$kr_name\",\"$en_name\",\"$_position\", \"$_address\", \"$_phone\", \"$_fax\", \"$_email\", \"$_department\"";
			if(isset($_image)){
				$query = $query.",\"$_image\"";
			}
			$query = $query.", \"$_category\", \"$cv\"";
			if(isset($cvfile)){
				$query = $query.",\"$cvfile\"";
			}
			$query = $query.");";
			$pdo = $GLOBALS["pdo"];
			$stmt = $pdo->prepare($query);
			$stmt->execute();
			renderView("추가되었습니다.", "/pg/admin/people/index.php?cat=".$_category);
		}catch(Exception $e){
			echo $e;
		}
	}

	// 카테고리에 해당하는 임직원 전체를 반환
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
	// id에 해당하는 임직원 전체를 반환
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

	// id에 맞는 임직원을 삭제후 페이지 리턴
	function delete_people($id, $pg){
		try{
			$pdo = $GLOBALS["pdo"];
			$stmt = $pdo->prepare("DELETE FROM people_tb WHERE id=".$id);
			$stmt->execute();
			renderView("삭제되었습니다.", "/pg/admin/people/index.php?cat=".$pg);
		}catch(Exception $e){
			echo $e;
		}

	}

	// id에 맞는 임직원 업데이트
	function update_people($_id, $kr_name, $en_name, $_position, $_address, $_phone, $_fax, $_email,$_department, $_image, $_category, $cv, $cvfile){
		try{
	    $cv = str_replace("\r\n","<br>",$cv);
			/*이미지가 있을경우 이미지도 업데이트*/
			$query = "UPDATE people_tb SET kr_name=\"$kr_name\", en_name=\"$en_name\", position=\"$_position\", address=\"$_address\", phone=\"$_phone\", fax=\"$_fax\", email=\"$_email\", department=\"$_department\", category=\"$_category\", cv=\"$cv\"";
			if(isset($_image)){
				$query = $query.", image = \"$_image\"";
			}
			if(isset($cvfile)){
				$query = $query.", cv_file = \"$cvfile\"";
			}
			$query = $query." WHERE id=\"$_id\"";
			$pdo = $GLOBALS["pdo"];

			$stmt = $pdo->prepare($query);
			$stmt->execute();
			renderView("변경되었습니다.", "/pg/admin/people/index.php?cat=".$_category);
		}catch(Exception $e){
			echo $e;
		}
	}


	// Journel 검색
	function select_papers($category, $page){
    try{
			$min = (($page-1)*7) +1;
			$max = 7*$page;
			$pdo = $GLOBALS["pdo"];
			$sql = "
				SELECT A.* FROM (
					SELECT
						@ROWNUM := @ROWNUM + 1 AS ROWNUM,
						paper_tb.*
					FROM
						paper_tb,
						(SELECT @ROWNUM := 0) R
					WHERE
						category=\"$category\"
					ORDER BY id DESC
				)AS A
				WHERE ROWNUM BETWEEN ".$min." AND ".$max.";
			";
      $stmt = $pdo->prepare($sql);
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

	// id에 해당하는 notice 삭제
	function delete_notice($id, $cat){
    try{
			$pdo = $GLOBALS["pdo"];
			$stmt = $pdo->prepare("DELETE FROM notice_tb WHERE id=".$id);
      $stmt->execute();
			renderView("삭제되었습니다.", "/pg/admin/notice/index.php?cat=".$cat."&page=1");
    }catch(Exception $e){
      echo $e;
    }
	}

	// id에 해당하는 notice 업데이트
	function update_notice($id, $title, $content, $cat){
    try{
			$pdo = $GLOBALS["pdo"];
			$sql = "UPDATE notice_tb SET title=\"".$title."\", content=\"".$content."\" WHERE id=".$id;
			$stmt = $pdo->prepare($sql);
      $stmt->execute();
			renderView("변경되었습니다.", "/pg/admin/notice/index.php?cat=".$cat."&page=1");
    }catch(Exception $e){
      echo $e;
    }
	}

	// id에 해당하는 notice 업데이트
	function insert_notice($title, $content, $date, $cat){
    try{
			$pdo = $GLOBALS["pdo"];
			$sql = "INSERT INTO notice_tb(title, content, date, writer) VALUES(\"$title\", \"$content\", \"$date\", \"운영자\")";
			$stmt = $pdo->prepare($sql);
      $stmt->execute();
			renderView("추가되었습니다.", "/pg/admin/notice/index.php?cat=".$cat."&page=1");
    }catch(Exception $e){
      echo $e;
    }
	}

	// 교수 경력 조회
	function select_history($id){
    try{
			$pdo = $GLOBALS["pdo"];
			$sql = "
			SELECT * FROM (
				SELECT
					A.*,
					B.title AS honorsTitle FROM kyu_db.biography_tb AS A LEFT JOIN kyu_db.awards_and_honors_tb AS B on A.order_idx = B.order_idx
					WHERE A.professorid = ".$id." AND b.professorid = ".$id."
          ORDER BY order_idx
			)history";
			$stmt = $pdo->prepare($sql);
      $stmt->execute();
      return $stmt;
    }catch(Exception $e){
      echo $e;
    }
	}
}
?>
