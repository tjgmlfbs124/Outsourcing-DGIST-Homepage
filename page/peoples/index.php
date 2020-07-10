<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8"/>
  <title>대구경북과학기술원</title>
  <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/css/people_index.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/js/Utils/utils.js" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      var page = getParmasToObject(unescape(location.href), 'pg');
      if(!page)
        $("#infoWrap").load("<?php $_SERVER['DOCUMENT_ROOT'] ?>" + '/page/peoples/professor.php');
      else{
        $("#infoWrap").load("<?php $_SERVER['DOCUMENT_ROOT'] ?>" + '/page/peoples/' + page + '.php');
      }

    });

    function move(content){
      $("#infoWrap").load("<?php $_SERVER['DOCUMENT_ROOT'] ?>" + content)
    }
  </script>
</head>
	<div id="header">
			<?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/header.php';?>
	</div>

  <div id="mainWrap">
    <div class="peopleMenuWrap">
      <ul>
        <li onclick="move('/page/peoples/professor.php')">
          <p>Professor</p>
        </li>
        <li onclick="move('/page/peoples/researcher.php')">
          <p>Researcher</p>
        </li>
        <li onclick="move('/page/peoples/student.php')">
          <p>Student</p>
        </li>
        <li onclick="move('/page/peoples/alumni.php')">
          <p>Alumni</p>
        </li>
      </ul>
    </div>
    <div id="infoWrap">

    </div>
  </div>
	<div id="footer">
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/footer.php';?>
  </div>
