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
                          <h2>LAB :: Notice</h2>
                          <p>Businex always try to provide the best Business Solutions for Clinets
                              to grow up their Business very sharply and smoothly.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
    <!--== End Page Header Area ==-->


  <!--== Start Blog Details Page Content ==-->
  <div class="blog-details-page-content sp-y"  style="margin-top:100px;">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <article class="blog-post-details">
                      <div class="blog-post-txt">
                        <div class="member-desc">
                          <h2 id="profile-name">Notice</h2>
                          <h5 id="profile-position">공지사항</h5>
                        </div>
                        <ul id="notice-list" style="margin-top:75px;">
                        </ul>
                        <div class="pagination-wrap">
                            <ul id="notice-list" class="pagination">
                                <li class="prev" onclick="movePage('prev')"><a style="visibility:hidden;"><i class="fa fa-long-arrow-left"></i> Previous</a></li>
                                <li class="next" onclick="movePage('next')"><a style="visibility:hidden;">Next <i class="fa fa-long-arrow-right"></i></a></li>
                            </ul>
                        </div>
                      </div>
                  </article>
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
      <?php
        require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
        $api = new getForm();
        $result = $api -> select_notices($_GET['page']);
        $pages = $api -> select_notices_count();

        while ($row = $result->fetch(PDO::FETCH_BOTH)){?>
          $("#notice-list").append("<li id=\"list-<?php echo $row['id']?>\" style=\"border-bottom:1px solid #eee; padding:10px 0px 10px 0px; cursor:pointer;\" onclick=\"location.href='<?php $_SERVER['DOCUMENT_ROOT']?>/pg/noticeInfo.php?no=<?php echo $row['id']?>'\"></li>")
          $("#list-<?php echo $row['id']?>").append('<p><?php echo $row['title']?><a style=\"float:right;\">' +  sliceDate("<?php echo $row['date'] ?>") + '</a></p>');
        <?php }

        for($idx=0; $idx<=$pages['CNT'] / 10; $idx++){ ?>
          $("#notice-list > .next").before("<li><a id=\"pg-index-<?php echo $idx?>\" href=\"<?php $_SERVER['DOCUMENT_ROOT']?>/pg/noticeList.php?page=<?php echo $idx+1?>\" style=\"color:#a0a0a0\"><?php echo $idx+1?></a></li>");
          <?php
        }

      ?>
      highlightPageIndex();

    </script>
</body>
</html>
