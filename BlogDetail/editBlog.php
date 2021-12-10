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
  <title>编辑页面</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../BlogHomePage/blog.css" rel="stylesheet">
  <style>
    textarea {
      width: 60vw;
      height: 400px;
    }

    .formStyle {
      padding: 50px 100px;
    }

    nav {
      padding-left: 170px;
      padding-top: 50px;

    }
  </style>
</head>

<body>
  <!-- =======================修改表单=============================================================== -->
  <form method="post" action="BlogChangeInfo.php" class="formStyle">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">文章编号：</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="blog_id" readonly value="<?php echo $blog_id ?>">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">文章标题：</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="<?php echo $title ?>">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">文章内容：</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"><?php echo $content ?></textarea>
    </div>

    <nav class="blog-pagination" aria-label="Pagination">
      <button class="btn btn-outline-primary" style="margin-right: 30px;">发布</button>
      <a class="btn btn-outline-secondary" onclick="backTo()">取消</a>
    </nav>
  </form>

  <!-- =======================修改表单=============================================================== -->

  <script>
    function backTo() {
      window.location = 'myBlogDetail.php?blog_id=<?php echo $blog_id ?>';
    }
  </script>
</body>

</html>