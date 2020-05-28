<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>대구경북과학기술원</title>
  <link rel="stylesheet" href="<?php $_SERVER[''] ?>/css/people_researcher.css">
  <script>
    $(document).ready(function(){
      var list = new Array();
      <?php
        require $_SERVER['DOCUMENT_ROOT'].'/requestAPI.php';
        $api = new RequestAPI();
        $result = $api->select_researcher_list();
        while ($row = mysql_fetch_array($result)){?>
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
          $("#info_"+i).append("<img src='/" + item.image + ".jpg'></img>");
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
