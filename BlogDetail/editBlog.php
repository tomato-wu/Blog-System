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

    .btnStyle {
      margin-left: 10vw;
      width: 20vw;
    }

    nav {
      padding-left: 170px;
      padding-top: 50px;

    }
  </style>
</head>

<body>
  <h1>修改界面</h1>
  <form method="post" action="changeInfo.php">
    <!-- 用户昵称 -->
    <div class="mb-3 row">
      <label for="inputPassword" class="col-sm-1 col-form-label">文章标题：</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputPassword" name="name" value="<?php echo $title ?>">
      </div>
    </div>

    <!-- 个人简介 -->
    <div class="mb-3 row">
      <label for="inputPassword" class="col-sm-1 col-form-label">内容：</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="info"><?php echo $content ?></textarea>
      </div>
    </div>
    <!-- <input type="button" class="btn btn-outline-primary btnStyle" value="修改"></input> -->
    <nav class="blog-pagination" aria-label="Pagination">
      <a class="btn btn-outline-primary" style="margin-right: 30px;" href="#">发布</a>
      <a class="btn btn-outline-secondary" onclick="backTo()">取消</a>
    </nav>
  </form>


  <script>
    function backTo() {
      history.back();
    }
  </script>
</body>

</html>