<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8"/>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php $_SERVER[''] ?>/css/admin/admin_people.css">
  <link rel="stylesheet" href="<?php $_SERVER[''] ?>/css/fonts.css">
  <script>
    $(document).ready(function() {
      var target = document.getElementById('fileToUpload');
      $("input[name=category]").val("<?php echo $_GET['category']?>");

      // 업데이트시, url에 id가 있다면
      <?php if(isset($_GET['id'])){
        require $_SERVER['DOCUMENT_ROOT'].'/getForm.php';
        $api = new getForm();
        $result = $api->select_etc_id_list($_GET['category'], $_GET['id']);
        while ($row = mysql_fetch_array($result)){ ?>
          $("input[name=id]").val("<?php echo $row['id']?>");
          $("img[name=myImage]").attr('src',"<?php $_SERVER[''] ?>/uploadFile/<?php echo $row['image']?>.jpg");
          $("input[name=mode]").val("<?php echo $_GET['action']?>");
          $("input[name=department]").val("<?php echo $row['department']?>");
          $("input[name=name]").val("<?php echo $row['name']?>");
          $("input[name=position]").val("<?php echo $row['position']?>");
          $("input[name=address]").val("<?php echo $row['address']?>");
          $("input[name=phone]").val("<?php echo $row['phone']?>");
          $("input[name=email]").val("<?php echo $row['email']?>");
        <?php }
      }
      else{ ?>
        $("input[name=mode]").val("<?php echo $_GET['action']?>");
      <?php } ?>

      imagePreView(target, function(img){
        $("#profileImg").replaceWith(img);
      });

    });

    // 이미지를 클릭했을때, Form 업로드 클릭되게.
    function ajaxFileUpload() {
      jQuery("#fileToUpload").click();
    }

    // 폼을 통해 이미지를 업로드하면 클라이언트에 이미지가 프리뷰되는것.
    function imagePreView(target, callback){
      var img = new Image();
      target.onchange = function (e) {
        e.preventDefault();
        var file = target.files[0], reader = new FileReader();
        reader.onload = function (event) {
          img.src = event.target.result;
          img.width = 150;
          img.height = 220;
          img.id="profileImg";
        };
        reader.readAsDataURL(file);
        callback(img);
      };
    }

  </script>
</head>
<div>
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/admin_header.php';?>
</div>

<div>
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/admin_menu.php';?>
</div>

<div id="professorAddWrap">
  <form method="POST" action="/form/form_edit_etc_people.php?" enctype="multipart/form-data">

      <input name="mode" style="display:none;"/>
      <input name="id" style="display:none;"/>
      <input name="category" style="display:none;"/>

      <div class="listWrap">
        <input type="file" id="ajaxFile" onChange="ajaxFileChange(this);" style="display:none;" >
        <input type="submit" id="btnOk" value="확인" class="btn btn-outline-secondary"/>
        <table id="noticeTb">
          <tr>
            <td rowspan="4" style="padding:5px;">
              <div class="imgWrap">
                <div class="alphaWrap" onclick="ajaxFileUpload()">
                  <img src="<?php $_SERVER[''] ?>/images/cam.png"></img>
                </div>
                <img name="myImage" id="profileImg" src="<?php $_SERVER[''] ?>/images/empty.png" ></img>
                <input type="file" name="fileToUpload" id="fileToUpload" style="display:none;">
              </div>

            </td>
            <td>이름</td>
            <td><input id="shortInput" name="name" type="text" class="form-control"/></td>
            <td>직책</td>
            <td><input name="position" id="shortInput" type="text" class="form-control"/></td>
          </tr>

          <tr>
            <td>학과</td>
            <td><input id="shortInput" name="department" type="text" class="form-control"/></td>
            <td>주소</td>
            <td colspan="3"><input id="longInput" name="address" type="text" class="form-control"/></td>
          </tr>

          <tr>
            <td>Email</td>
            <td colspan="3"><input id="longInput" name="email" type="text"class="form-control" /></td>
          </tr>

          <tr>
            <td>PHONE</td>
            <td><input name="phone" id="shortInput" type="text" class="form-control"/></td>
            <td>FAX</td><td><input  name="fax" id="shortInput" type="text" class="form-control"/></td>
          </tr>
        </table>
      </div>
  </form>
</div>
