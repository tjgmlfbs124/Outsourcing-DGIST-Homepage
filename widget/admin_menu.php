<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/css/admin/index.css">
  <script type="text/javascript">
    $(document).ready(function() {
      $(".menu > ul > li").hover(
       function(){
           $(this).find(".submenu").stop().show();
       },function(){
           $(this).find(".submenu").stop().hide();
      });
    });

    function setPage(page){
      location.href = "<?php $_SERVER['DOCUMENT_ROOT'] ?>" + page;
    }

  </script>
</head>
<body>
  <div id="wrap">
    <div class="menu">
      <ul>
          <li><a>PEOPLE</a>
              <ul class="submenu">
                  <li onclick="setPage('/page/admin/peoples/professor.php')"><a>Professor</a></li>
                  <li onclick="setPage('/page/admin/peoples/researcher.php?category=researcher')"><a>Researcher</a></li>
                  <li onclick="setPage('/page/admin/peoples/student.php?category=student')"><a>Student</a></li>
                  <li onclick="setPage('/page/admin/peoples/alumni.php?category=alumni')"><a>alumni</a></li>
              </ul>
          </li>
          <li onclick="setPage('project')"><a>PROJECT</a>
          </li>
          <li><a>PUBLICATIONS</a>
              <ul class="submenu">
                <li><a>International Journal</a></li>
                <li><a>Domestic journal</a></li>
                <li><a>Conference</a></li>
                <li><a>Patents</a></li>
                <li><a>Technology Transfer</a></li>
                <li><a>Books</a></li>
              </ul>
          </li>
          <li><a>LECTURE</a>
              <ul class="submenu">
              </ul>
          </li>
          <li><a>NEWS</a>
              <ul class="submenu">
              </ul>
          </li>
          <li onclick="setPage('notice')"><a>NOTICE</a>
              <ul class="submenu">
              </ul>
          </li>
      </ul>
    </div>
  </div>
</body>
</html>
