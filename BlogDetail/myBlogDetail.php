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

</head>

<body>

  <article class="blog-post">
    <h2 class="blog-post-title">
      <?php
      echo $title;
      ?>
    </h2>
    <p class="blog-post-meta"> <?php echo $time ?> <a href="#"> <?php echo $name ?></a></p>
    <p><?php echo $content ?></p>

    <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
    <ul>
      <li>First list item</li>
      <li>Second list item with a longer description</li>
      <li>Third list item to close it out</li>
    </ul>
    <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
  </article>

  <nav class="blog-pagination" aria-label="Pagination">
    <a class="btn btn-outline-primary" href="editBlog.php?blog_id=<?php echo $blog_id ?>">编辑</a>
    <a class="btn btn-outline-secondary" onclick="backTo()">返回</a>
  </nav>

  <script>
    function backTo() {
      history.back();
    }
  </script>
</body>

</html>