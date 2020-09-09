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


                      </article>
                  </div>
              </div>

              <div class="col-lg-3">
                  <aside class="sidebar-area-wrapper mt-md-80 mt-sm-60">
                      <!-- Start Single Sidebar Wrap -->
                      <div class="single-sidebar-item-wrap">
                          <h3 class="sidebar-title">NOTICE LIST</h3>
                          <div class="sidebar-body">
                              <ul class="sidebar-list">
                                  <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/notice/index.php?cat=notice&page=1">NOTICE</a></li>
                                  <li><a href="#">UPDATE</a></li>
                                  <li><a href="#">NEWS</a></li>
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
                                          <h6><a href="#">RESEARCH</a></h6>
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
      function highlightPageIndex(){
        $("#pg-index-<?php echo $_GET['page']-1 ?>").css("color","#3c3c3c");
      }

      function sliceDate(date){
        return date.split(" ")[0];
      }

      function deleteRow(id){
        var result = confirm("정말로 삭제하시겠습니까?");
        if(result){
          location.href="<?php $_SERVER['DOCUMENT_ROOT']?>/form/delete_notice.php?id="+id+"&cat=<?php echo $_GET['cat']?>";
        }
      }

      <?php
        require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
        $api = new getForm();
        $result = $api -> select_notices($_GET['page']);
        $pages = $api -> select_notices_count();

        while ($row = $result->fetch(PDO::FETCH_BOTH)){?>
          $("#notice-list").append(
            "<li id=\"list-<?php echo $row['id']?>\""+
             "style=\"border-bottom:1px solid #eee; "+
             "padding:10px 0px 10px 0px; cursor:pointer;\">"+
             "<a onclick=\"location.href='<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/notice/notice_input_form.php?cat=<?php echo $_GET['cat'] ?>&no=<?php echo $row['id']?>'\">"+
               "("+ sliceDate("<?php echo $row['date'] ?>") + ") <?php echo $row['title']?>"+
             "</a>"+
              "<i style=\"float:right; margin-left:20px;\"class=\"mdi mdi-close\" onclick=\"deleteRow(<?php echo $row['id']?>); return false;\">"+
           "</li>");
        <?php }

        for($idx=0; $idx<=$pages['CNT'] / 10; $idx++){ ?>
          $("#notice-list > .next").before("<li><a id=\"pg-index-<?php echo $idx?>\" href=\"<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/notice/index.php?cat=notice&page=<?php echo $idx+1?>\" style=\"color:#a0a0a0\"><?php echo $idx+1?></a></li>");
          <?php
        }

      ?>
      highlightPageIndex();
    </script>
</body>
</html>
