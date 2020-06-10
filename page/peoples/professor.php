<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>대구경북과학기술원</title>
  <link rel="stylesheet" href="<?php $_SERVER[''] ?>/css/people_professor.css">
  <script type="text/javascript" src="<?php $_SERVER[''] ?>/js/Utils/utils.js"></script>
  <script>
    $(document).ready(function(){
      var list = new Array();
      <?php
        require $_SERVER['DOCUMENT_ROOT'].'/getForm.php';
        $api = new getForm();
        $result = $api->select_professor_list();
        while ($row = mysql_fetch_array($result)){?>
          var html = "<a id='<?php echo $row['id']?>'>교수 " + "<?php echo $row['name']?></a>";
          <?php
            if(!strcmp($row['name'], "이종훈")){
              $initID = $row['id'];
            }?>
          list.push({
            "id" : <?php echo $row['id']?>,
            "name" : "<?php echo $row['name']?>",
            "position" : "<?php echo $row['position']?>",
            "address" : "<?php echo $row['address']?>",
            "phone" : "<?php echo $row['phone']?>",
            "fax" : "<?php echo $row['fax']?>",
            "email" : "<?php echo $row['email']?>",
            "image" : "<?php echo $row['image']?>",
            "biography" : "<?php echo $row['biography']?>",
            "research_interests" : "<?php echo $row['research_interests']?>",
            "professional_experiences" : "<?php echo $row['professional_experiences']?>",
            "awards_and_honors" : "<?php echo $row['awards_and_honors']?>"
          })
          $(".professordiv > div.menu").append(html);
      <?php } ?>
      renderInfo(list[0]);

        // 교수 탭 활성화
      var tab = $('.professordiv > div.menu > a');
      $(".professordiv > div.menu").children()[0].className += "active";

      $(".professordiv > div.menu > a").click(function(e){
        e.preventDefault();
        var target = $(this);
        var index = target.index();
        tab.removeClass("active");
        target.addClass("active");

        $(".loadDiv").empty();
        var id = target[0].id;
        list.forEach((item, i) => {
          if(item['id'] == target[0].id){
            renderInfo(list[i]);
          }
        });
      });
    });

    function renderInfo(proList){
      var title = ["biography", "research_interests", "professional_experiences", "awards_and_honors"]
      $(".loadDiv").append("<div class='info'></div>");
      $(".info").append("<div class='profile'></div>");
      $(".profile").append(" <img src=<?php $_SERVER[''] ?>'/uploadFile/" + proList.image + ".jpg'></img>");
      $(".info").append("<div class='comment01'>");
      $(".comment01").append("<p>" + proList.name +"</p>");
      $(".comment01").append("<ul class='infoList01'>");
      $(".infoList01").append("<li>" + proList.position + "</li>");
      $(".infoList01").append("<li><b>Address</b> : " + proList.address + "</li>");
      $(".infoList01").append("<li><b>Phone</b> : " + proList.phone + "</li>");
      $(".infoList01").append("<li><b>Fax</b> : " + proList.fax + "</li>");
      $(".infoList01").append("<li><b>Email</b> : " + "<a class='email' onclick=copy_to_clipboard(\"" + proList.email + "\")>" + proList.email + "</a></li>");
      $(".info").append("<div class='comment02'>");
      title.forEach((item, i) => {
        $(".comment02").append("<p>" + capitalize(title[i]) +"</p>");
        $(".comment02").append("<ul class='infoList02'>");
        (proList[title[i]]).split("&br&").forEach((item, i) => {
          if(item){
            $(".infoList02").append("<li>" + item.replace(/\n/g, "") + "</li>");
          }
        });
      });
    }

  </script>
</head>
<div class="professordiv">
  <a class="title">PROFESSOR</a>
  <div class="menu">

  </div>
  <div class="loadDiv">
  </div>
</div>
