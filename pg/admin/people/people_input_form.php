<form method="POST" action="/form/form_edit_professor.php" enctype="multipart/form-data">
  <div class="comment-area-wrapper">
    <div id="professor-list"class="comments-view-area">
      <div class="single-comment-wrap d-flex">
        <figure class="author-thumb">
          <a href="/pg/professorInfo.php?cat=professor"><img src="<?php $_SERVER['DOCUMENT_ROOT']?>/image/empty.jpg" alt="Author"></a>
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
  </div>
</form>

<script>
  <?php
    require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
    $api = new getForm();
    $result = $api -> select_people($_GET['cat'], $_GET['id']);
    while ($row = $result->fetch(PDO::FETCH_BOTH)){?>
      $("input[name=kr_name]").val("<?php echo $row['kr_name']?>");
      $("input[name=en_name]").val("<?php echo $row['en_name']?>");
      $("input[name=position]").val("<?php echo $row['position']?>");
      $("input[name=phone]").val("<?php echo $row['phone']?>");
      $("input[name=email]").val("<?php echo $row['email']?>");
    <?php }

  ?>

</script>
