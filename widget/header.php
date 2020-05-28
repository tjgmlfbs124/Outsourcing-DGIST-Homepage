<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php $_SERVER[''] ?>/css/menu.css">
  <script type="text/javascript">
    $(document).ready(function() {
      $("#menuList > li").mouseover(function(){
        $(this).find(".submenu").stop().show();
      });
      $("#menuList > li").mouseout(function(){
        $(this).find(".submenu").stop().hide();
      });
    });

    function onPage(content){
      location.href = "<?php $_SERVER[''] ?>" + content;
    }

  </script>
</head>
<body>
  <div class="logobar">
    <div>
      <img src="/images/setting.png" onclick="onPage('/page/setting/index')"></img>
    </div>
    <a class="logotext02">DGIST 대구경북과학기술원</a>
  </div>
  <div class="menuWrap">
    <img id="logo" src="/images/logo.png"  onclick="onPage('/')"></img>
    <ul id="menuList">
      <li onclick="onPage('/page/news/news')">
        <a>News</a>
        <ul class="submenu">
        </ul>
      </li>
      <li>
        <a>Researcher</a>
        <ul class="submenu">
          <li onclick="onPage('/page/paper/index.php')"><a>Paper</a></li>
          <li onclick="onPage('/page/paper/index.php?pg=domestic_journal')"><a>Patent</a></li>
          <li onclick="onPage('/page/paper/index.php?pg=conference')"><a>Technology Transfer</a></li>
          <li onclick="onPage('/page/paper/index.php?pg=patents')"><a>Project</a></li>
          <li onclick="onPage('/page/paper/index.php?pg=technology_transfer')"><a>Interest</a></li>
        </ul>
      </li>
      <li>
        <a>People</a>
        <ul class="submenu">
          <li onclick="onPage('/page/peoples/index.php?pg=professor');"><a>Professor</a></li>
          <li onclick="onPage('/page/peoples/index.php?pg=researcher')"><a>Researcher</a></li>
          <li onclick="onPage('/page/peoples/index.php?pg=student')"><a>Student</a></li>
          <li onclick="onPage('/page/peoples/index.php?pg=alumni')"><a>Alumni</a></li>
        </ul>
      </li>
      <li onclick="onPage('/page/artlab/artlabs')">
        <a>ART Lab</a>
        <ul class="submenu"></ul>
      </li>
    </ul>
  </div>

</body>
</html>
