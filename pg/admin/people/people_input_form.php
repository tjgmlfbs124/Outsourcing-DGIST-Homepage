<form method="POST" action="/form/update_people.php" enctype="multipart/form-data">
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
            <div class="col-md-6">
              Position
              <div class="single-input-item">
                <input name="position" type="text" placeholder="Position " required  readonly/>
              </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle"role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Select Position
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                      <a class="dropdown-item" onclick="selectPosition(this)">Researcher</a>
                      <a class="dropdown-item" onclick="selectPosition(this)">Student</a>
                      <a class="dropdown-item" onclick="selectPosition(this)">Alumni</a>
                    </div>
                  </li>
                </ul>
              </div>
              </nav>
            <div class="col-md-12">
              Phone
                <div class="single-input-item">
                    <input name="phone" type="text" placeholder="phone number " required />
                </div>
            </div>

              <div class="col-md-12">
                Email
                  <div class="single-input-item">
                      <input name="email" type="email" placeholder="email " required />
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    <button class="btn btn-outline w-100"><a>UPDATE</a></button>
    <input type="submit" id="btnOk" value="확인" class="btn btn-outline-secondary" style="visibility:hidden;" />
  </div>
</form>

<script>

  var target = document.getElementById('fileToUpload');
  imagePreView(target, function(img){
    $("#profileImg").replaceWith(img);
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
  function selectPosition(target){
    console.log($(target).text());
    $("input[name=position]").val($(target).text());
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
        $("input[name=email]").val("<?php echo $row['email']?>");
      <?php }
    }
    else{?>
      $("#imageButton").text("Add to profile");
      $("#updateButton").text("Add");
      $("form").attr("action","<?php $_SERVER['DOCUMENT_ROOT']?>/form/add_people.php");
    <?php
    }
  ?>

</script>
