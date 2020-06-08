<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8"/>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php $_SERVER[''] ?>/css/admin/admin_people.css">
  <link rel="stylesheet" href="<?php $_SERVER[''] ?>/css/fonts.css">
  <script src="<?php $_SERVER[''] ?>/js/Utils/utils.js" type="text/javascript"></script>
  <script>
    var formData = new FormData();
    $(document).ready(function() {
      <?php if(isset($_GET['id'])){
        require $_SERVER['DOCUMENT_ROOT'].'/getForm.php';
        $api = new getForm();
        $result = $api->select_professor_id_list($_GET['id']);
        while ($row = mysql_fetch_array($result)){ ?>
          $("input[name=mode]").val("<?php echo $_GET['action']?>");
          $("input[name=name]").val("<?php echo $row['name']?>");
          $("input[name=position]").val("<?php echo $row['position']?>");
          $("input[name=address]").val("<?php echo $row['address']?>");
          $("input[name=phone]").val("<?php echo $row['phone']?>");
          $("input[name=email]").val("<?php echo $row['email']?>");
          $("input[name=fax]").val("<?php echo $row['fax']?>");
          $("textarea[name=biography]").val(("<?php echo $row['biography']?>").replace(/&&/g, "\n"));
          $("textarea[name=research_interests]").val(("<?php echo $row['research_interests']?>").replace(/&&/g, "\n"));
          $("textarea[name=professional_experiences]").val(("<?php echo $row['professional_experiences']?>").replace(/&&/g, "\n"));
          $("textarea[name=awards_and_honors]").val(("<?php echo $row['awards_and_honors']?>").replace(/&&/g, "\n"));
        <?php }
      }
      else{ ?>
        $("input[name=mode]").val("<?php echo $_GET['action']?>");
      <?php } ?>
    });

    function ajaxFileUpload() {
        jQuery("#ajaxFile").click();
      }

      function ajaxFileChange() {
        formData.set("myImage", jQuery("#ajaxFile")[0].files[0]);
      }

      function submit(){
        // formData.set("name", $("input[name=name]").val());
        // formData.set("position", $("input[name=position]").val());
        // formData.set("phone", $("input[name=phone]").val());
        // formData.set("address",$("input[name=address]").val());
        // formData.set("fax",$("input[name=fax]").val());
        // formData.set("email", $("input[name=email]").val());
        // formData.set("department", null);
        // formData.set("category", "professor");
        // formData.set("biography", $("textarea[name=biography]").val().replace('\n', "&&"));
        // formData.set("research_interests", $("textarea[name=research_interests]").val().replace('\n', "&&"));
        // formData.set("professional_experiences", $("textarea[name=professional_experiences]").val().replace('\n', "&&"));
        // formData.set("awards_and_honors", $("textarea[name=awards_and_honors]").val().replace('\n', "&&"));
        // multipartAPi("/prof/"+mode,formData,function(result){
        //   if(mode == "upload"){
        //     alert("추가되었습니다.");
        //   }
        //   else{
        //     alert("변경되었습니다.");
        //   }
        //   $("#content").load("_list_professor");
        // });
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
  <form method="POST" action="/form/editProfessor.php">
      <input name="mode" style="display:none;"/>
      <div class="listWrap">
        <input type="file" id="ajaxFile" onChange="ajaxFileChange(this);" style="display:none;" name="myImage" />
        <input type="submit" id="btnOk" value="확인" class="btn btn-outline-secondary"/>
        <table id="noticeTb">
          <tr>
            <td rowspan="4" style="padding:5px;">
              <div class="imgWrap">
                <div class="alphaWrap" onclick="ajaxFileUpload()">
                  <img src="/cam.png"></img>
                </div>
                <img name="myImage" id="profileImg" src="/empty.png" ></img>
              </div>

            </td>
            <td>이름</td>
            <td><input id="shortInput" name="name" type="text" class="form-control"/></td>
            <td>직책</td><td><input name="position" id="shortInput" type="text" class="form-control"/></td>
          </tr>

          <tr>
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

          <tr class="textArea">
            <td>Biography</td>
            <td colspan="4">
              <textarea name="biography" class="form-control"></textarea>
              <a>※ 줄바꿈은 리스트항목으로 변환됩니다.</a>
            </td>
          </tr>

          <tr class="textArea">
            <td>Research<br>Interests</td>
            <td colspan="4">
              <textarea name="research_interests" class="form-control"></textarea>
              <a>※ 줄바꿈은 리스트항목으로 변환됩니다.</a>
            </td>
          </tr>

          <tr class="textArea">
            <td>Professional<br>Experiences</td>
            <td colspan="4">
              <textarea name="professional_experiences" class="form-control"></textarea>
              <a>※ 줄바꿈은 리스트항목으로 변환됩니다.</a>
            </td>
          </tr>

          <tr class="textArea">
            <td>Awards<br>And<br>Honors</td>
            <td colspan="4">
              <textarea name="awards_and_honors" class="form-control"></textarea>
              <a>※ 줄바꿈은 리스트항목으로 변환됩니다.</a>
            </td>
          </tr>
        </table>
      </div>
  </form>
</div>
