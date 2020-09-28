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

  <!--== Start Service Area Wrapper ==-->
  <div class="service-area-wrapper sm-top-wt">
      <div class="service-area-top parallax" data-parallax-speed="0.75" data-bg="assets/img/service/service-bg.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-xl-5 m-auto text-center">
                      <div class="section-title section-title--light">
                          <h6>데이터 관리자모드</h6>
                          <h2 class="mb-0">미래자동차 연구부</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="service-content-area">
          <div class="container">
              <div class="row mtn-30">
                  <div class="col-sm-6 col-lg-4">
                      <!-- Start Service Item -->
                      <div class="service-item">
                        <figure class="service-thumb" >
                            <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/img/service/02.jpg" alt="Businex-Service"/>
                            <div class="service-content" style="left:0; background-color: rgba(26,58,137, 1);">
                                <div class="service-content-inner" >
                                    <h2><strong style="color:#fff;">People </strong></h2>
                                </div>
                            </div>
                        </figure>
                        <div class="service-content">
                            <div class="service-content-inner">
                                <h5><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/people/index.php?cat=professor" class="stretched-link">Category List</a></h5>
                                <p>- Professor</p>
                                <p>- Researcher</p>
                                <p>- Student</p>
                                <p>- Alumi</p>
                            </div>
                        </div>
                      </div>
                      <!-- End Service Item -->
                  </div>

                  <div class="col-sm-6 col-lg-4">
                      <!-- Start Service Item -->
                      <div class="service-item">
                        <figure class="service-thumb" >
                            <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/img/service/02.jpg" alt="Businex-Service"/>
                            <div class="service-content" style="left:0; background-color: rgba(26,58,137, 1);">
                                <div class="service-content-inner" >
                                    <h2><strong style="color:#fff;">Research </strong></h2>
                                </div>
                            </div>
                        </figure>
                        <div class="service-content">
                            <div class="service-content-inner">
                                <h5><a href="service-details.html" class="stretched-link">Category List</a></h5>
                                <p>- Paper</p>
                                <p>- Patent</p>
                                <p>- Technology Trasnper</p>
                                <p>- Project</p>
                                <p>- Interest</p>
                            </div>
                        </div>
                      </div>
                      <!-- End Service Item -->
                  </div>

                  <div class="col-sm-6 col-lg-4">
                      <!-- Start Service Item -->
                      <div class="service-item">
                        <figure class="service-thumb" >
                            <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/img/service/02.jpg" alt="Businex-Service"/>
                            <div class="service-content" style="left:0; background-color: rgba(26,58,137, 1);">
                                <div class="service-content-inner" >
                                    <h2><strong style="color:#fff;">Notice </strong></h2>
                                </div>
                            </div>
                        </figure>
                        <div class="service-content">
                            <div class="service-content-inner">
                                <h5><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/notice/index.php?cat=notice&page=1" class="stretched-link">Category List</a></h5>
                                <p>- Notice</p>
                                <p>- News</p>
                                <p>- Update</p>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>


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

</body>

</html>
