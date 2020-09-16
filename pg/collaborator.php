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

    <!--== Start Blog Page Area Wrapper ==-->
    <div class="blog-page-content-area sp-y" style="margin-top:50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <article class="blog-post-details">
                        <div class="blog-post-txt">
                          <div class="member-desc">
                            <h2 id="profile-name">Collaborator</h2>
                        </div>
                        </div>
                    </article>
                </div>

                <div class="col-12">
                    <div class="blog-content-wrapper">
                        <div class="row mtn-30" id="collaborator-list">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  	<footer class="footer-area sp-y" style="position:absolute; bottom:0; width:100%; height:63px; padding-top:30px; mar">
  			<?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/footer.php'?>
  	</footer>
		<?php require_once $_SERVER['DOCUMENT_ROOT'].'/pg/include/include_js.php'?>

    <script>
      function addCompany(){
        return ""+
        "<div class=\"col-md-6 col-lg-3\">"+
          "<div class=\"blog-item\" style=\"border:1px solid #ccc; padding:10px; background-color:#fff;\">"+
            "<figure class=\"blog-thumb\" style=\" text-align:center;\">"+
              "<a >"+
                "<img src=\"<?php $_SERVER['DOCUMENT_ROOT']?>/image/collaborator/collaborator (" + idx + ").jpg\" alt=\"Businex-Blog\" />"+
              "</a>"+
            "</figure>"+
          "</div>"+
        "</div>";
      }
      for(idx=1; idx<=21; idx++){
        $("#collaborator-list").append(addCompany(idx));
      }
    </script>
</body>
</html>
