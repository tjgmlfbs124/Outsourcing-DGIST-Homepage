<form method="POST" action="/form/form_edit_professor.php" enctype="multipart/form-data">
  <div class="comment-area-wrapper">
    <div id="professor-list"class="comments-view-area">
      <div class="single-comment-wrap d-flex">
        <figure class="author-thumb">
          <a href="/pg/professorInfo.php?cat=professor">
            <img name="image" src="<?php $_SERVER['DOCUMENT_ROOT']?>/image/empty.jpg" alt="Author"></a>
            <button class="btn btn-outline w-100"><a style="font-size:10px;">Update to profile</a></button>
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
      <div class="col-md-12">
        Awards and Honors
          <div class="single-input-item">
            <textarea name="awards_and_honors" id="con_message" cols="30" rows="7" placeholder="awards and honors" required></textarea>
          </div>
      </div>
    </div>
    <button class="btn btn-outline w-100"><a>UPDATE</a></button>
  </div>
</form>

<script>
  function lineBreaker(str){
    return str.replace(/<br>/g, "\n");
  }
  <?php
    require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
    $api = new getForm();
    $result = $api -> select_people($_GET['cat'], $_GET['id']);
    while ($row = $result->fetch(PDO::FETCH_BOTH)){?>
      $("img[name=image]").attr("src","<?php $_SERVER['DOCUMENT_ROOT']?>/image/profile/<?php echo $row['image']?>.jpg");
      $("input[name=kr_name]").val("<?php echo $row['kr_name']?>");
      $("input[name=en_name]").val("<?php echo $row['en_name']?>");
      $("input[name=position]").val("<?php echo $row['position']?>");
      $("input[name=phone]").val("<?php echo $row['phone']?>");
      $("input[name=fax]").val("<?php echo $row['fax']?>");
      $("input[name=address]").val("<?php echo $row['address']?>");
      $("input[name=email]").val("<?php echo $row['email']?>");
      $("textarea[name=awards_and_honors]").html(lineBreaker("<?php echo $row['awards_and_honors']?>"));
      console.log("id : <?php echo $row['id']?>");
    <?php }

  ?>

</script>
