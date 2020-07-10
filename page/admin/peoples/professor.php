<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8"/>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/css/admin/admin_people.css">
  <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/css/fonts.css">
  <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/js/Utils/utils.js" type="text/javascript"></script>
  <script>
    var list = new Array();
    var professor = null;
    $(document).ready(function() {
        $("#select").append("<option>없음</option>");
        <?php
        require $_SERVER['DOCUMENT_ROOT'].'/getForm.php';
        $api = new getForm();

        // URL에 id가 없다면 select Box만 렌더링
        if(!isset($_GET['id'])){
          $result = $api->select_professor_name_list();
          while ($row = mysql_fetch_array($result)){?>
            $("#select").append("<option value=<?php echo $row['id']?>><?php echo $row['name']?></option>");
          <?php
          }
        }
        // URL에 id가 있다면 selector 선택 및 id에 맞는 교수 조회
        else{
          $result = $api->select_professor_name_list();
          while ($row = mysql_fetch_array($result)){?>
            $("#select").append("<option value=<?php echo $row['id']?>><?php echo $row['name']?></option>");
          <?php
          }?>

          $("#select").val("<?php echo $_GET['id']?>");

          <?php
          // id에 맞는 교수 조회 및 정보 제공
          $paper = array("biography","research_interests","professional_experiences","awards_and_honors");
          $result = $api->select_professor_id_list($_GET['id']);
          while ($row = mysql_fetch_array($result)){?>
            $(".profile").empty();
            $(".record").empty();
            $("#btn_profssor_add").attr("disabled",false);
            $("#btn_profssor_edit").attr("disabled",false);
            $("#btn_profssor_delete").attr("disabled",false);
            $(".profile").append("<div class='imgWrap'></div>");
            $(".imgWrap").append("<img src=\"<?php $_SERVER['DOCUMENT_ROOT'] ?>/uploadFile/<?php echo $row['image']?>.jpg\" onclick =\"ajaxFileUpload()\" </img>");
            $(".profile").append("<div class='profileWrap'></div>");
            $(".profileWrap").append("<ul id='profileList'></ul>");
            $("#profileList").append("<li id='name'><a>이름 : </a><a><?php echo $row['name']?></a></li>");
            $("#profileList").append("<li id='position'><a>직책 : </a><a><?php echo $row['position']?></a></li>");
            $("#profileList").append("<li id='address'><a>주소 : </a><a><?php echo $row['address']?></a></li>");
            $("#profileList").append("<li id='phone'><a>휴대폰 : </a><a><?php echo $row['phone']?></a></li>");
            $("#profileList").append("<li id='fax'><a>팩스 : </a><a><?php echo $row['fax']?></a></li>");
            $("#profileList").append("<li id='email'><a>이메일 : </a><a><?php echo $row['email']?></a></li>");
            $(".record").append("<div class='recordWrap'></div>");
            $(".recordWrap").append("<ul class=\"recordList\"></ul>");
            var paper = {
              "Biograpy" : "<?php echo $row['biography']?>",
              "Research_Interests" : "<?php echo $row['research_interests']?>",
              "Professional_Experiences" : "<?php echo $row['professional_experiences']?>",
              "Awards_and_Honors" : "<?php echo $row['awards_and_honors']?>"
            };
            $(".recordList").append("<h3>Biograpy</h3>");
            (paper.Biograpy.split("&br&")).forEach(function(item, i){
              c
              $(".recordList").append("<li><a>" + item + "</a></li>");
            });
            $(".recordList").append("<h3>Research Interests</h3>");
            paper.Research_Interests.split("&br&").forEach(function(item, i){
              $(".recordList").append("<li><a>" + item + "</a></li>");
            });
            $(".recordList").append("<h3>Professional Experiences</h3>");
            paper.Professional_Experiences.split("&br&").forEach(function(item, i){
              $(".recordList").append("<li><a>" + item + "</a></li>");
            });
            $(".recordList").append("<h3>Awards and Honors</h3>");
            paper.Awards_and_Honors.split("&br&").forEach(function(item, i){
              $(".recordList").append("<li><a>" + item + "</a></li>");
            });
          <?php
          }
        }?>
    });

    // select 선택시
    function select(target){
      var id = target.value;
      if($("#select").prop('selectedIndex') > 0){
        location.href = "<?php $_SERVER['DOCUMENT_ROOT'] ?>/page/admin/peoples/professor.php?category=peoples&id="+id;
      }
      else{
        $("#btn_profssor_add").attr("disabled",true);
        $("#btn_profssor_edit").attr("disabled",true);
        $("#btn_profssor_delete").attr("disabled",true);
      }
    }

    function edit(mode){
      var url = "";
      switch(mode){
        case "delete":
          var alert = confirm("정말 삭제하시겠습니까?");
          if(alert){
            url = "<?php $_SERVER['DOCUMENT_ROOT'] ?>/form/removeProfessor.php?id=<?php echo $_GET['id']?>";
          }
          break;
        case "update":
          <?php if(isset($_GET['id'])){ ?>
            url = "<?php $_SERVER['DOCUMENT_ROOT'] ?>/page/admin/peoples/edit_professor.php?category=peoples&action="+mode+"&id=<?php echo $_GET['id']?>";
          <?php } ?>

          break;
        case "upload":
          url = "<?php $_SERVER['DOCUMENT_ROOT'] ?>/page/admin/peoples/edit_professor.php?category=peoples&action="+mode;
          break;
      }
      location.href = url;
    }

  </script>
</head>
<div>
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/admin_header.php';?>
</div>


<div>
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/admin_menu.php';?>
</div>

<div id="professorWrap" >

  <div class="header">
    <div class="path">
      <h2> 교수 설정</h2>
    </div>
    <div class="list">
      <h2>교수선택</h2>
        <select id='select' class='form-control' onchange='select(this)'>

      </select>
    </div>
    <div class="edit">
      <button class="btn btn-outline-secondary" id="btn_profssor_add" onclick="edit('upload')">교수추가</button>
      <button class="btn btn-outline-secondary" id="btn_profssor_edit" onclick="edit('update')" disabled="true">교수편집</button>
      <button class="btn btn-outline-secondary" id="btn_profssor_delete" onclick="edit('delete')"disabled="true">교수삭제</button>
    </div>
  </div>

  <div class="content">
    <div class="profile"></div>
    <div class="record"></div>
  </div>
</div>
