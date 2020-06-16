<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8"/>
  <title>대구경북과학기술원</title>
  <link rel="stylesheet" href="<?php $_SERVER[''] ?>/css/people_index.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="<?php $_SERVER[''] ?>/js/Utils/utils.js" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      var page = getParmasToObject(unescape(location.href), 'pg');
      if(!page)
        $("#infoWrap").load("<?php $_SERVER[''] ?>" + '/page/peoples/professor.php');
      else{
        $("#infoWrap").load("<?php $_SERVER[''] ?>" + '/page/peoples/' + page + '.php');
      }

    });

    function move(content){
      $("#infoWrap").load("<?php $_SERVER[''] ?>" + content)
    }
  </script>
</head>
	<div id="header">
			<?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/header.php';?>
	</div>
  <div id="mainWrap">
    <div class="peopleMenuWrap">
      <ul>
        <li>
          <div>
            <p>MEMBER</p>
          </div>
        </li>
        <li onclick="move('/page/peoples/professor.php')">
          <div class="peopleli">
            <p>Professor</p>
          </div>
        </li>
        <li onclick="move('/page/peoples/researcher.php')">
          <div class="peopleli">
            <p>Researcher</p>
          </div>
        </li>
        <li onclick="move('/page/peoples/student.php')">
          <div class="peopleli">
            <p>Student</p>
          </div>
        </li>
        <li onclick="move('/page/peoples/alumni.php')">
          <div class="peopleli">
            <p>Alumni</p>
          </div>
        </li>
      </ul>
    </div>
    <div id="infoWrap">

    </div>
  </div>
	<div id="footer">
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/footer.php';?>
  </div>
