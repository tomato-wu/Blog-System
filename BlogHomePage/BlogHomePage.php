<?php
session_start();
require_once('../conn.php')
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>博客主页</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">



  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="headers.css" rel="stylesheet">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="blog.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <!-- 头部header -->
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">

        <div class="col-2 text-center">
          <a class="blog-header-logo text-dark" href="#"><strong>个人博客</strong></a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="btn btn-sm btn-outline-secondary" href="../index.php">退出</a>
        </div>
      </div>
    </header>

    <!-- 导航栏 -->
    <header class="p-3 bg-dark text-white navStyle">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="?type=myblog" class="nav-link px-2 text-secondary">首页</a></li>
            <li><a href="#" class="nav-link px-2 text-white">我的收藏</a></li>
            <li><a href="?type=settingPage" class="nav-link px-2 text-white">账号设置</a></li>
            <li><a href="#" class="nav-link px-2 text-white">管理</a></li>
            <li><a href="https://blog.csdn.net/weixin_45644335?spm=1010.2135.3001.5343" class="nav-link px-2 text-white" target="_blank">我的CSDN</a></li>

          </ul>
          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
          </form>
          <div class="text-end">
            <button type="button" class="btn btn-outline-light me-2">Login</button>
            <button type="button" class="btn btn-warning">Sign-up</button>
          </div>
        </div>
      </div>
    </header>
  </div>

  <main class="container">

    <div class="row g-5">
      <!--   表单显示      -->
      <?php
      if ($_GET['type'] == 'myblog') {
        require_once "./blogPage/myblog.php";
      }
      if ($_GET['type'] == 'informationPage') {
        require_once "./DetailPage/informationPage.php";
      }
      if ($_GET['type'] == 'selectPage') {
        require_once "./DetailPage/selectPage.php";
      }
      if ($_GET['type'] == 'settingPage') {
        require_once "./settingPage/settingInformation.php";
      }
      ?>

      <!-- 右边侧边栏关于博主的介绍 -->
      <?php
      require_once("./aboutMe.php")
      ?>
      <!-- 右边侧边栏关于博主的介绍 -->

    </div>
  </main>

  <!-- 页底的说明 -->
  <footer class="blog-footer">
    <p>此项目使用html,css,javascript,<a href="https://getbootstrap.com/">Bootstrap</a>和php搭建 by <a href="https://blog.csdn.net/weixin_45644335?spm=1010.2135.3001.5343">@tomato</a>.</p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer>
  <!-- 页底的说明 -->
</body>

</html>