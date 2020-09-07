<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DGIST :: Radar Lab</title>
		<?php require_once $_SERVER['DOCUMENT_ROOT'].'/pg/include/include_css.php'?>

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
                          <h2 id="profile-name">ART Rab :: Notice</h2>
                          <h5 id="profile-position">Notice</h5>
                        </div>
                      </div>
                  </article>
                  <ul id="notice-list">

                  </ul>
                  <div class="pagination-wrap">
                      <ul id="notice-list" class="pagination">
                          <li class="prev" onclick="movePage('prev')"><a style="visibility:hidden;"><i class="fa fa-long-arrow-left"></i> Previous</a></li>
                          <li class="next" onclick="movePage('next')"><a style="visibility:hidden;">Next <i class="fa fa-long-arrow-right"></i></a></li>
                      </ul>
                  </div>
                  <div class="col-lg-15">
                      <article id="input-form"class="blog-post-details">
                        <form method="POST" action="/form/update_notice.php" enctype="multipart/form-data">
                          <input name="id" style="display:none;"/>
                          <div class="comment-area-wrapper">
                            <div class="row">
                              <div class="col-md-8">
                                제목
                                <div class="single-input-item">
                                    <input name="title" type="text" placeholder="제목" required />
                                </div>
                              </div>
                                <div class="col-md-4">
                                  날짜
                                  <div class="single-input-item">
                                      <input name="date" type="text" required disabled/>
                                  </div>
                                </div>
                              <div class="col-md-12">
                                내용
                                <div class="single-input-item">
                                  <textarea name="content" cols="30" rows="7" placeholder="내용" required=""></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                            <button class="btn btn-outline w-100"><a>UPDATE</a></button>
                            <input type="submit" id="btnOk" value="확인" class="btn btn-outline-secondary" style="visibility:hidden;" />
                          </div>
                        </form>

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
                                  <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/people/index.php?cat=notice&page1">NOTICE</a></li>
                                  <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/people/index.php?cat=update">UPDATE</a></li>
                                  <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/people/index.php?cat=news">NEWS</a></li>
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
                                            <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/image/paper-04.jpg" alt="Businex-Service"/>
                                            <div class="service-content" style="left:0; background-color: rgba(64,64,64, 0.5);">
                                                <div class="service-content-inner" style="width:100%; height:100%;">

                                                </div>
                                            </div>
                                        </figure>
                                    </div>

                                    <div class="post-info">
                                        <h6><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/people/index.php?cat=professor">PEOPLE</a></h6>
                                        <span class="post-date"><i class="fa fa-clock-o"></i>  March 9, 2019</span>
                                    </div>
                                </div>

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
          $("form").attr("action","/form/update_notice.php?cat=<?php echo $_GET['cat']?>&id=<?php echo $row['id'] ?>");
          $("input[name=title]").val("<?php echo $row['title'] ?>");
          $("input[name=date]").val("<?php echo $row['date'] ?>");
          $("textarea[name=content]").val("<?php echo $row['content'] ?>");
        <?php }

      ?>
    </script>
</body>
</html>
