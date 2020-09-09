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
                          <h2>Advanced Radar Tech. Lab<br></h2>
                          <p style="max-width:100%;">Home / Notice / Notice Detail</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
    <!--== End Page Header Area ==-->


    <!--== Start Page Content Area Wrapper ==-->
    <div class="page-content-wrapper" >
        <div class="service-details-wrapper sm-top" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-11">
                        <div class="service-details-content">
                            <div class="service-details-info">
                              <div class="member-desc" >
                                <h4 id="notice-title"></h4>
                                <h5 id="notice-date" style="float:right;"></h5>
                              </div>

                              <div class="about-service mt-50 mt-sm-35" style="margin-top:100px; margin-bottom:300px;">
                                  <p id="notice-content"></p>

                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div >
    <!--== End Page Content Area Wrapper ==-->

  	<footer class="footer-area sp-y">
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
      function sliceDate(date){
        return date.split(" ")[0];
      }

      <?php
        require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
        $api = new getForm();
        $result = $api -> select_notice($_GET['no']);
        while ($row = $result->fetch(PDO::FETCH_BOTH)){?>
          $("#notice-title").text("<?php echo $row['title'] ?>");
          $("#notice-date").text("<?php echo $row['date'] ?>");
          $("#notice-content").text("<?php echo $row['content'] ?>");
        <?php }

      ?>
    </script>
</body>
</html>
