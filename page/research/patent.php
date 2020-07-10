<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8"/>
  <title>대구경북과학기술원</title>
  <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/css/paper_index.css">
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script>
  $(document).ready(function(){
    var list = {
      International : [],
      Domestic : [],
      Conference : [],
      Books : [],
    }

    <?php
      require $_SERVER['DOCUMENT_ROOT'].'/getForm.php';
      $api = new getForm();
      $result = $api->select_paper_list("international_journal");
      while ($row = mysql_fetch_array($result)){?>
        var temp = "<?php $row['content']?>".replace("'","");
        <?php
          if(!strcmp($row['category'], "international_journal")){ ?>
            list['International'].push('<?php echo $row['title'].$row['content'] ?>')
        <?php }
          else if(!strcmp($row['category'], "domestic_journal")){ ?>
            list['Domestic'].push('<?php echo  $row['title'].$row['content'] ?>')
        <?php }
          else if(!strcmp($row['category'], "conference")){ ?>
            list['Conference'].push('<?php echo $row['title'].$row['content'] ?>')
        <?php }?>
    <?php } ?>

      $(".listWrap").append("<a class='title'>Patent</a>");
  });
  </script>
</head>
	<div id="header">
			<?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/header.php';?>
	</div>

  <div id="wrap">
    <div class="listWrap">

    </div>
  </div>
	<div id="footer">
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/footer.php';?>
  </div>
