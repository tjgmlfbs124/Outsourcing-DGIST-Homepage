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


  <!--== Start Blog Details Page Content ==-->
  <div class="blog-details-page-content sp-y"  style="margin-top:100px;">
      <div class="container">
          <div class="row">
              <div class="col-lg-9">
                  <article class="blog-post-details">
                      <div class="blog-post-txt">
                        <div class="member-desc">
                          <h2 id="profile-name">ART Rab :: People</h2>
                          <h5 id="profile-position">Professor</h5>
                        </div>
                      </div>
                  </article>
                  <ul id="people-list" class="sidebar-list">

                  </ul>



                  <div class="col-lg-15">
                      <article id="input-form"class="blog-post-details">
                        <div class="form-input-item" style="float:right;">
                            <button id="addButton" class="btn-submit" onclick="Add()">ADD</button>
                        </div>
                      </article>
                  </div>
              </div>

              <div class="col-lg-3">
                  <aside class="sidebar-area-wrapper mt-md-80 mt-sm-60">
                      <!-- Start Single Sidebar Wrap -->
                      <div class="single-sidebar-item-wrap">
                          <h3 class="sidebar-title">PEOPLE LIST</h3>
                          <div class="sidebar-body">
                              <ul class="sidebar-list">
                                  <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/people/index.php?cat=professor">PROFESSOR</a></li>
                                  <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/people/index.php?cat=researcher">RESEARCHER</a></li>
                                  <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/people/index.php?cat=student">STUDENT</a></li>
                                  <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/people/index.php?cat=alumni">ALUMNI</a></li>
                              </ul>
                          </div>
                      </div>
                      <!-- End Single Sidebar Wrap -->

                      <!-- Start Single Sidebar Wrap -->
                      <div class="single-sidebar-item-wrap">
                          <h3 class="sidebar-title">MENU</h3>
                          <div class="sidebar-body">
                              <div class="latest-blog-widget">
                                  <div class="single-blog-item">
                                      <div class="post-thumb">
                                          <figure class="service-thumb" >
                                              <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/image/paper-01.jpg" alt="Businex-Service"/>
                                              <div class="service-content" style="left:0; background-color: rgba(64,64,64, 0.5);">
                                                  <div class="service-content-inner" style="width:100%; height:100%;">
                                                  </div>
                                              </div>
                                          </figure>
                                      </div>

                                      <div class="post-info">
                                          <h6><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/paper.php?cat=international_journal&page=1">RESEARCH</a></h6>
                                          <span class="post-date"><i class="fa fa-clock-o"></i>  March 9, 2019</span>
                                      </div>
                                  </div>

                                  <div class="single-blog-item">
                                      <div class="post-thumb">
                                          <figure class="service-thumb" >
                                              <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/image/paper-02.jpg" alt="Businex-Service"/>
                                              <div class="service-content" style="left:0; background-color: rgba(64,64,64, 0.5);">
                                                  <div class="service-content-inner" style="width:100%; height:100%;">

                                                  </div>
                                              </div>
                                          </figure>
                                      </div>

                                      <div class="post-info">
                                          <h6><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/notice/index.php?cat=notice&page=1">NOTICE</a></h6>
                                          <span class="post-date"><i class="fa fa-clock-o"></i>  March 9, 2019</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- End Single Sidebar Wrap -->
                  </aside>
              </div>
          </div>
      </div>
  </div>
  <!--== End Blog Details Page Content ==-->


  <footer class="footer-area sp-y" style="margin-top: 50px; padding:30px 0px 10px 0px; position:fixed; bottom:0; width:100%;">
			<?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/footer.php'?>
	</footer>


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

    <script>
      <?php
        require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
        $api = new getForm();
        $category = $_GET['cat'];
        $url = "";?>


      // 교수 추가
      function Add(){
        var url;
        switch("<?php echo $category ?>"){
          case "professor" :
            url = "/pg/admin/people/professor_input_form.php?cat=professor";
            break;
          default :
            url = "/pg/admin/people/people_input_form.php?cat=people";
        }
        $("#input-form").load(url);
      }


      // 교수삭제
      function deleteRow(id){
        var result = confirm("정말로 삭제하시겠습니까?");
        if(result){
          location.href="<?php $_SERVER['DOCUMENT_ROOT']?>/form/delete_people.php?id="+id+"&cat=<?php echo $_GET['cat']?>";
        }
      }

      <?php
      if(isset($_GET['id'])){
        switch($category){
          case "professor" :
            $url = "/pg/admin/people/professor_input_form.php?cat=".$category."&id=".$_GET['id'];
            break;
          default :
            $url = "/pg/admin/people/people_input_form.php?cat=".$category."&id=".$_GET['id'];
        }
        ?>
        $("#input-form").load("<?php echo $url ?>");

      <?php
      }
      else{
        $result = $api -> select_peoples($category);
        while ($row = $result->fetch(PDO::FETCH_BOTH)){?>
          $("#people-list").append("<li><a href=\"<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/people/index.php?cat=<?php echo $category?>&id=<?php echo $row['id']?>\"><?php echo $row['kr_name']?><i style=\"float:right;\"class=\"mdi mdi-close\" onclick=\"deleteRow(<?php echo $row['id']?>); return false;\"></a></li>");

        <?php }
      }
    ?>

    $("#profile-position").text("<?php echo ucfirst($category)?>");
  </script>
</body>
</html>
