<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/pdo.php';
class getForm{
	function __construct(){}

	// 교수 전체 리스트
	function select_all_professor(){
    try{
			$pdo = $GLOBALS["pdo"];
      $stmt = $pdo->prepare("SELECT * FROM professor_tb");
      $stmt->execute();
      return $stmt;
    }catch(Exception $e){
      echo $e;
    }
	}

}
?>
