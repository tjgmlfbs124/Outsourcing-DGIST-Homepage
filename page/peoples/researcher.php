<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>대구경북과학기술원</title>
  <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/css/people_researcher.css">
  <script>
    $(document).ready(function(){
      var list = new Array();
      <?php
        require $_SERVER['DOCUMENT_ROOT'].'/getForm.php';
        $api = new getForm();
        $result = $api->select_etc_list("researcher");
        while ($row = $result->fetch(PDO::FETCH_BOTH)){?>
          list.push({
            "name" : "<?php echo $row['name']?>",
            "address" : "<?php echo $row['address']?>",
            "phone" : "<?php echo $row['phone']?>",
            "email" : "<?php echo $row['email']?>",
            "department" : "<?php echo $row['department']?>",
            "image" : "<?php echo $row['image']?>",
          })
      <?php } ?>
      renderInfo(list);
      function renderInfo(item){
        list.forEach((item, i) => {
          $(".listWrap").append("<div id='info_" + i + "'></div>");
          $("#info_"+i).append("<img src='<?php $_SERVER['DOCUMENT_ROOT'] ?>/uploadFile/" + item.image + ".jpg'></img>");
          $("#info_"+i).append("<p>" + item.name +"</p>");
          $("#info_"+i).append("<a> 학과 : " + item.department +"<br></a>");
          $("#info_"+i).append("<a> 휴대폰 : " + item.phone +"<br></a>");
          $("#info_"+i).append("<a> 이메일 :</a>" + "<a class='email' onclick=copy_to_clipboard(\"" + item.email + "\")>" + item.email + "</a><br>");
          $("#info_"+i).append("<a > 주소 : " + item.address +"<br></a>");
        });
      }
    });
  </script>
</head>
<div id="researchdiv">
  <a class="title">RESEARCHER</a>
  <div class="listWrap">

  </div>
</div>
