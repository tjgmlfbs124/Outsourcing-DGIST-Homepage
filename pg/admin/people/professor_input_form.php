<form method="POST" action="<?php $_SERVER['DOCUMENT_ROOT']?>/form/update_professor.php" enctype="multipart/form-data" style="margin-bottom:150px;">
  <input name="id" style="display:none;"/>
  <div class="comment-area-wrapper">
    <div id="professor-list"class="comments-view-area">
      <div class="single-comment-wrap d-flex">
        <figure class="author-thumb">
          <a>
            <img name="image" id="profileImg" src="<?php $_SERVER['DOCUMENT_ROOT']?>/image/empty.jpg" alt="empty">
          </a>
          <div class="btn btn-outline w-100" onclick="updateToImage()">
            <a id="imageButton" style="font-size:10px;">Update to profile</a>
          </div>
          <input type="file" name="fileToUpload" id="fileToUpload" style="display:none;">
        </figure>
        <div class="comments-info">
          <div class="row">
            <div class="col-md-6">
              Korea Name *
                <div class="single-input-item">
                    <input name="kr_name" type="text" placeholder="korea name " required />
                </div>
            </div>
            <div class="col-md-6">
              English Name *
                <div class="single-input-item">
                    <input name="en_name" type="text" placeholder="english name " required />
                </div>
            </div>
            <div class="col-md-12">
              Position
                <div class="single-input-item">
                    <input name="position" type="text" placeholder="position" required />
                </div>
            </div>
            <div class="col-md-6">
              Phone
                <div class="single-input-item">
                    <input name="phone" type="text" placeholder="phone number " required />
                </div>
            </div>
            <div class="col-md-6">
              Fax
                <div class="single-input-item">
                    <input name="fax" type="text" placeholder="fax " required />
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    <div class="col-md-12">
      Address
        <div class="single-input-item">
            <input name="address" type="text" placeholder="address" required />
        </div>
    </div>
      <div class="col-md-12">
        Email
          <div class="single-input-item">
              <input name="email" type="text" placeholder="email " required />
          </div>
      </div>
      <div class="col-md-10">
        CV File
          <div class="single-input-item">
              <input name="cvfile" type="text" placeholder="file Name " required readonly/>
          </div>
      </div>
      <div class="col-md-2">
         &nbsp
          <div class="single-input-item">
              <input type="button" class="btn btn-outline w-100" onclick="uploadToCvFile()" value="파일찾기"></button>
              <input type="file" name="upfile" id="uploadCvFile" style="display:none;" />
          </div>
      </div>
      <div class="col-md-12">
        CV
          <div class="single-input-item">
            <textarea name="cv" id="con_message" cols="30" rows="7" placeholder="awards and honors" required></textarea>
          </div>
      </div>
    </div>
    <button class="btn btn-outline w-100" onclick="submit()"><a id="updateButton">UPDATE</a></button>
    <input type="submit" id="btnOk" value="확인" class="btn btn-outline-secondary" style="visibility:hidden;" />
  </div>
</form>

<script>

  // 이미지 프리뷰
  var target = document.getElementById('fileToUpload');
  var target2 = document.getElementById('uploadCvFile');

  imagePreView(target, function(img){
    $("#profileImg").replaceWith(img);
  });
  filePreView(target2, function(name){
    $("input[name=cvfile]").val(name);
  });

  function lineBreaker(str){
    return str.replace(/<br>/g, "\n");
  }
  function submit(){
      jQuery("#btnOk").click();
  }
  function updateToImage(){
      jQuery("#fileToUpload").click();
  }
  function uploadToCvFile(){
      jQuery("#uploadCvFile").click();
  }

  // 폼을 통해 이미지를 업로드하면 클라이언트에 이미지가 프리뷰되는것.
  function imagePreView(target, callback){
    var img = new Image();
    target.onchange = function (e) {
      e.preventDefault();
      var file = target.files[0], reader = new FileReader();
      reader.onload = function (event) {
        img.src = event.target.result;
        img.width = 220;
        img.height = 220;
        img.id="profileImg";
      };
      reader.readAsDataURL(file);
      callback(img);
    };
  }

  // 폼을 통해 이미지를 업로드하면 클라이언트에 파일명 프리뷰
  function filePreView(target, callback){
    target.onchange = function (e) {
      e.preventDefault();
      var file = target.files[0], reader = new FileReader();
      console.log("file : " , file)
      callback(file.name);
    };
  }

  <?php
    require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
    $api = new getForm();
    if(isset($_GET['id'])){
      $result = $api -> select_people($_GET['cat'], $_GET['id']);
      while ($row = $result->fetch(PDO::FETCH_BOTH)){?>
        $("input[name=id]").val("<?php echo $row['id']?>");
        $("img[name=image]").attr("src","<?php $_SERVER['DOCUMENT_ROOT']?>/image/profile/<?php echo $row['image']?>.jpg");
        $("input[name=kr_name]").val("<?php echo $row['kr_name']?>");
        $("input[name=en_name]").val("<?php echo $row['en_name']?>");
        $("input[name=position]").val("<?php echo $row['position']?>");
        $("input[name=phone]").val("<?php echo $row['phone']?>");
        $("input[name=fax]").val("<?php echo $row['fax']?>");
        $("input[name=address]").val("<?php echo $row['address']?>");
        $("input[name=email]").val("<?php echo $row['email']?>");
        $("textarea[name=cv]").html(lineBreaker("<?php echo $row['cv']?>"));
        $("input[name=cvfile]").val("<?php echo $row['cv_file']?>");

      <?php }
    }
    else{?>
      $("#imageButton").text("Add to profile");
      $("#updateButton").text("Add");
      $("form").attr("action","<?php $_SERVER['DOCUMENT_ROOT']?>/form/add_professor.php");
    <?php
    }

  ?>

</script>
