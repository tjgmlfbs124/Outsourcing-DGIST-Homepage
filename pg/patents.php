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
  <div class="blog-details-page-content sp-y"  style="margin-top:50px;">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <article class="blog-post-details">
                      <div class="blog-post-txt">
                        <div class="member-desc">
                          <h2 id="profile-position"></h2>
                        </div>
                        <ul id="paper-list">
                        </ul>
                        <div class="pagination-wrap">
                            <ul id="page-list" class="pagination">
                                <li class="prev"><a style="visibility:hidden;"><i class="fa fa-long-arrow-left"></i> Previous</a></li>
                                <li class="next"><a style="visibility:hidden;">Next <i class="fa fa-long-arrow-right"></i></a></li>
                            </ul>
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
      var boldTagList = ["Jong-HunLee", "JonghunLee"];

      function bold(str){
        var temp = str.replace(/ /gi, "");
        for(var idx=0; idx<boldTagList.length; idx++){
          if(temp.indexOf(boldTagList[idx]) > -1){
            temp = temp.replace(boldTagList[idx], "<strong>Jong-Hun Lee</strong>");
          }
        }
        // boldTagList.forEach((item, i) => {
        //   if(temp.indexOf(item) > -1){
        //     temp = temp.replace(item, "<strong>Jong-Hun Lee</strong>");
        //   }
        // });
        return temp;
      }

      function highlightPageIndex(){
        $("#pg-index-<?php echo $_GET['page'] ?>").css("color","#3c3c3c");
      }

      function setSubTitle(){
        var cat = "<?php echo $_GET['cat'] ?>";
        switch(cat){
          case "international_journal" :
            cat = "International Journal";
            break;
          case "domestic_journal" :
            cat = "Domestic Journal";
            break;
          case "conference" :
            cat = "Conference";
            break;
          case "books" :
            cat = "Books";
            break;
          case "patents" :
            cat = "Patents";
            break;
        }
        $("#profile-position").text(cat);
      }
      <?php
        require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
        $api = new getForm();
        $idx=1;
        $result = $api -> select_papers($_GET['cat'], $_GET['page']);
        $pages = $api -> select_papers_count($_GET['cat']);

        // category에 해당하는 논문 리스트 10개 출력
        while ($row = $result->fetch(PDO::FETCH_BOTH)){?>
            $("#paper-list").append("<li id=\"list-<?php echo $row['id']?>\" style=\"border-bottom:1px solid #eee; padding:10px 0px 10px 0px;\"></li>")
            $("#list-<?php echo $row['id']?>").append('<p>' + bold("<?php echo $row['title']?>")+'<?php echo $row['content']?></p>');
        <?php }

        // page index 생성
        for($idx=1; $idx<=$pages['CNT'] / 7; $idx++){ ?>
          $("#page-list > .next").before("<li><a id=\"pg-index-<?php echo $idx?>\" href=\"<?php $_SERVER['DOCUMENT_ROOT']?>/pg/paper.php?cat=<?php echo $_GET['cat']?>&page=<?php echo $idx?>\" style=\"color:#a0a0a0\"><?php echo $idx?></a></li>");
          <?php
        }
      ?>
      setSubTitle();
      highlightPageIndex();
    </script>
</body>
</html>
