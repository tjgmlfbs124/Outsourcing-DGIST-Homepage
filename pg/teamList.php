<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DGIST :: Radar Lab</title>
		<?php require_once $_SERVER['DOCUMENT_ROOT'].'/pg/include/include_css.php'?>
</head>

<body>
	<header class="header-area">
  		<?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/header.php'?>
	</header>

  <!--== Start Page Header Area ==-->
  <div class="page-header-area">
    <div class="page-header-area bg-img" data-bg="<?php $_SERVER['DOCUMENT_ROOT']?>/image/main01.jpg" style="position:absolute;"></div>
    <div class="page-header-area bg-img" style="position:absolute; background:#080b1a; opacity: 0.7;">
      <div class="container" >
          <div class="row">
              <div class="col-lg-10 col-xl-8 m-auto text-center">
                  <div class="page-header-content-inner">
                      <div class="page-header-content">
                          <h2>DGIST ART LAB<br></h2>
                          <p id="path" style="max-width:100%;">Home / Professor</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
    <!--== End Page Header Area ==-->


    <!--== Start Blog Details Page Content ==-->
    <div class="blog-details-page-content sp-y" style="margin-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-15" style="width:100%;">
                    <article class="blog-post-details">

                      <div class="team-page-area-wrapper bg-offwhite sp-y sm-top">
                          <div class="container">
                              <div id="team-list"class="row mtn-30" style="background:#fff;">

                              </div>
                          </div>
                      </div>
                    </article>
                </div>

            </div>
        </div>
    </div>
    <!--== End Blog Details Page Content ==-->





    <footer class="footer-area sp-y" style="margin-top: 50px; padding:30px 0px 10px 0px; position:fixed; bottom:0; width:100%;">
  			<?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/footer.php'?>
  	</footer>


    <!-- Scroll Top Button -->
    <button class="btn-scroll-top"><i class="mdi mdi-chevron-up"></i></button>

    <!-- Start Off Canvas Menu Wrapper -->
    <aside class="off-canvas-wrapper off-canvas-menu">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner">
            <!-- Start Off Canvas Header -->
            <div class="close-btn">
                <button class="btn-close"><i class="mdi mdi-close"></i></button>
            </div>

            <!-- Start Off Canvas Content -->
            <div class="off-canvas-content">
                <div class="res-mobile-menu">

                </div>
            </div>
        </div>
    </aside>
		<?php require_once $_SERVER['DOCUMENT_ROOT'].'/pg/include/include_js.php'?>
</body>

<script>
  function addPerson(name, phone, email, image, position){
    var tag = "";
    switch (position) {
      case "Student":
        tag = "M.A";
        break;
      default:
        tag = "";
    }
    $("#team-list").append(""+
    "<div class=\"col-sm-6 col-lg-3\" style=\"background:#f8f9fc;\" >"+
      "<div class=\"team-mem-item\" style=\"margin-bottom:30px;\">"+
        "<figure class=\"member-pic\">"+
          "<img src=\"<?php $_SERVER['DOCUMENT_ROOT']?>/image/profile/"+image+".jpg\" alt=\"Team-Businex\" />"+
        "</figure>"+
        "<div class=\"member-info\" style=\"background:#f8f9fc;\">"+
          "<h5><a class=\"stretched-link\">"+name+ " &nbsp" + tag + "</a></h5><br>"+
          "<span class=\"designation\" style=\"float:left;\">Position : " + position + "</span><br>"+
          "<span class=\"designation\" style=\"float:left;\">Phone : "+phone+"</span><br>"+
          "<span class=\"designation\" style=\"float:left;\">Email : "+email+"</span><br>"+
        "</div>"+
      "</div>"+
    "</div>");
  }

  function addAlumni(name, phone, email, image, position){
    var tag = "";
    switch (position) {
      case "Student":
        tag = "M.A";
        break;
      default:
        tag = "";
    }
    $("#team-list").append(""+
    "<div class=\"col-sm-6 col-lg-3\" style=\"background:#f8f9fc;\" >"+
      "<div class=\"team-mem-item\" style=\"margin-bottom:30px;\">"+
        "<div class=\"member-info\" style=\"background:#fff;\">"+
          "<h5><a class=\"stretched-link\">"+name+ " &nbsp" + tag + "</a></h5><br>"+
          "<span class=\"designation\" style=\"float:left;\">Position : " + position + "</span><br>"+
          "<span class=\"designation\" style=\"float:left;\">Phone : "+phone+"</span><br>"+
          "<span class=\"designation\" style=\"float:left;\">Email : "+email+"</span><br>"+
        "</div>"+
      "</div>"+
    "</div>");
  }

  function addEmpty(){

    $("#team-list").append(""+
    "<div class=\"col-sm-6 col-lg-3\" background:#fff;>"+
      "<div class=\"team-mem-item\" style=\"width:330px;\" background:#fff;>"+
        "<div class=\"member-info\" style=\"width:330px; background:#fff;\">"+
          "<h5><a class=\"stretched-link\"></a></h5><br>"+
          "<span class=\"designation\" style=\"float:left;\"></span><br>"+
          "<span class=\"designation\" style=\"float:left;\"></span><br>"+
          "<span class=\"designation\" style=\"float:left;\"></span><br>"+
        "</div>"+
      "</div>"+
    "</div>");
  }

  $("#path").text("Home / <?php echo ucfirst($_GET['po'])?>");
</script>


<!-- PHP -->
<script>
  <?php
    require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
    $api = new getForm();
    $result = $api -> select_peoples($_GET['po']);
      while ($row = $result->fetch(PDO::FETCH_BOTH)){?>
        if("<?php echo $row['category'] ?>" === "alumni"){
          addAlumni(
            "<?php echo $row['en_name'] ?>",
            "<?php echo $row['phone'] ?>",
            "<?php echo $row['email'] ?>",
            "<?php echo $row['image'] ?>",
            "<?php echo ucfirst($row['position']) ?>"
          )
        }
        else{
          addPerson(
            "<?php echo $row['en_name'] ?>",
            "<?php echo $row['phone'] ?>",
            "<?php echo $row['email'] ?>",
            "<?php echo $row['image'] ?>",
            "<?php echo ucfirst($row['position']) ?>"
          )
        }
      <?php }

    if($result->rowCount() % 4 != 0){
      for($idx=0; $idx<(4-$result->rowCount()); $idx++){?>
        addEmpty()
      <?php }
    }

   ?>
</script>



</html>
