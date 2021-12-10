<?php
require_once('../conn.php');
$blog_id = $_GET['blog_id'];
$result = mysqli_query($conn, "SELECT * FROM blog_content where blog_id = $blog_id ");
$row = mysqli_fetch_array($result);

$type = $row['type'];
$title = $row['title'];
$content = $row['content'];
$time = $row['create_time'];
$name = $row['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>博客详情页面</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../BlogHomePage/blog.css" rel="stylesheet">

  <style>
    .articleStyle {
      padding: 50px;
    }

    nav {
      padding: 50px;
    }
  </style>
</head>

<body>

  <article class="blog-post articleStyle">
    <!-- 标题 -->
    <h2 class="blog-post-title">
      <?php
      echo $title;
      ?>
    </h2>
    <!-- 发布时间和作者 -->
    <p class="blog-post-meta"> <?php echo $time ?> <a href="#"> <?php echo $name ?></a></p>
    <!-- 文章内容 -->
    <p><?php echo $content ?></p>
  </article>

  <nav class="blog-pagination" aria-label="Pagination">
    <a class="btn btn-outline-primary" href="editBlog.php?blog_id=<?php echo $blog_id ?>">编辑</a>
    <a class="btn btn-outline-secondary" onclick="backTo()">返回</a>
  </nav>

  <script>
    function backTo() {
      window.location = '../BlogHomePage/BlogHomePage.php?type=myblog'
    }
  </script>
</body>

</html>