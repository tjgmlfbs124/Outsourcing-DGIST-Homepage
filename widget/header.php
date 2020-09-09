<!--== Start Header Area Wrapper ==-->
<div class="container">
    <div class="row align-items-center">
        <div class="col-5 col-lg-2">
            <!-- Start Logo Area -->
            <div class="logo-area">
                <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/">
                <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/image/logo.svg" alt="Businex-Logo"></a>
            </div>
            <!-- End Logo Area -->
        </div>

        <div class="col-lg-7 d-none d-lg-block">
            <!-- Start Navigation Area -->
            <div class="navigation-area mt-lg-3">
                <ul class="main-menu nav">
                    <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/artlab.php">ART Lab+</a> </li>

                    <li class="has-submenu">
                      <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/professorList.php?cat=professor">People</a>
                      <ul class="submenu-nav">
                          <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/professorList.php?cat=professor">professor</a></li>
                          <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/teamList.php?po=researcher">researcher</a></li>
                          <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/teamList.php?po=student">student</a></li>
                          <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/teamList.php?po=alumni">alumni</a></li>
                      </ul>
                    </li>

                    <li class="has-submenu">
                      <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/research.php">Research</a>
                      <ul class="submenu-nav">
                          <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/paper.php?cat=international_journal&page=1">paper</a></li>
                          <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/404.php">patent</a></li>
                          <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/404.php">technology Transfer</a></li>
                          <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/projectList.php">project</a></li>
                          <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/404.php">interest</a></li>
                      </ul>
                    </li>

                    <li class="has-submenu">
                      <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/noticeList.php?page=1">notice</a>
                      <ul class="submenu-nav">
                          <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/noticeList.php?page=1">notice</a></li>
                          <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/404.php">news</a></li>
                          <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/404.php">update</a></li>
                      </ul>
                    </li>
                </ul>
            </div>
            <!-- End Navigation Area -->
        </div>

        <div class="col-7 col-lg-3">
            <div class="header-action mt-lg-3 text-right">
                <button class="btn-menu d-lg-none"><i class="fa fa-bars"></i></button>
            </div>
        </div>
    </div>
</div>
<!--== End Header Area Wrapper ==-->
