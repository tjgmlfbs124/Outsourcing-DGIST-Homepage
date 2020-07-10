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
          $result = $api->select_etc_list($_GET['category']);
          while ($row = mysql_fetch_array($result)){?>
            $("#select").append("<option value=<?php echo $row['id']?>><?php echo $row['name']?></option>");
          <?php
          }
        }
        // URL에 id가 있다면 selector 선택 및 id에 맞는 사람 조회
        else{
          $result = $api->select_etc_list($_GET['category']);
          while ($row = mysql_fetch_array($result)){?>
            $("#select").append("<option value=<?php echo $row['id']?>><?php echo $row['name']?></option>");
          <?php
          }?>

          $("#select").val("<?php echo $_GET['id']?>");

          <?php
          // id에 맞는 교수 조회 및 정보 제공
          $result = $api->select_etc_id_list($_GET['category'], $_GET['id']);
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
            $("#profileList").append("<li id='position'><a>학과 : </a><a><?php echo $row['department']?></a></li>");
            $("#profileList").append("<li id='position'><a>직책 : </a><a><?php echo $row['position']?></a></li>");
            $("#profileList").append("<li id='address'><a>주소 : </a><a><?php echo $row['address']?></a></li>");
            $("#profileList").append("<li id='phone'><a>휴대폰 : </a><a><?php echo $row['phone']?></a></li>");
            $("#profileList").append("<li id='email'><a>이메일 : </a><a><?php echo $row['email']?></a></li>");
            $(".record").append("<div class='recordWrap'></div>");
            $(".recordWrap").append("<ul class=\"recordList\"></ul>");
          <?php
          }
        }?>
    });

    // select 선택시
    function select(target){
      var id = target.value;
      if($("#select").prop('selectedIndex') > 0){
        location.href = "<?php $_SERVER['DOCUMENT_ROOT'] ?>/page/admin/peoples/<?php echo$_GET['category']?>.php?category=<?php echo$_GET['category']?>&id="+id;
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
            url = "<?php $_SERVER['DOCUMENT_ROOT'] ?>/form/form_remove_etc_people.php?id=<?php echo $_GET['id']?>&category=<?php echo $_GET['category']?>";
          }
          break;
        case "update":
          <?php if(isset($_GET['id'])){ ?>
            url = "<?php $_SERVER['DOCUMENT_ROOT'] ?>/page/admin/peoples/edit_etc.php?category=<?php echo $_GET['category']?>&action="+mode+"&id=<?php echo $_GET['id']?>";
          <?php } ?>

          break;
        case "upload":
          url = "<?php $_SERVER['DOCUMENT_ROOT'] ?>/page/admin/peoples/edit_etc.php?category=<?php echo $_GET['category']?>&action="+mode;
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
      <h2>Student</h2>
    </div>
    <div class="list">
      <h2>학생선택</h2>
        <select id='select' class='form-control' onchange='select(this)'>

      </select>
    </div>
    <div class="edit">
      <button class="btn btn-outline-secondary" id="btn_profssor_add" onclick="edit('upload')">학생 추가</button>
      <button class="btn btn-outline-secondary" id="btn_profssor_edit" onclick="edit('update')" disabled="true">학생 편집</button>
      <button class="btn btn-outline-secondary" id="btn_profssor_delete" onclick="edit('delete')"disabled="true">학생 삭제</button>
    </div>
  </div>

  <div class="content">
    <div class="profile"></div>
    <div class="record"></div>
  </div>
</div>
