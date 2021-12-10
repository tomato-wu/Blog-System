<?php
session_start();
require_once('../conn.php');
$userName = $_SESSION['RightUserName'];
$sql = "SELECT * FROM users where userName=$userName";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
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

    .selectStyle {
      width: 200px;
    }
  </style>
</head>

<body>
  <!-- =======================修改表单=============================================================== -->
  <form method="post" action="./addBlogMethod.php" class="formStyle">

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">文章作者：</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="<?php echo $name ?>" readonly>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">文章标题：</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">文章分类：</label>
      <select class="form-select selectStyle" aria-label="Default select example" name="type">
        <option selected>选择分类</option>
        <?php
        $sql = "select * from blog_type where userName=$userName";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
          $type = $row['type'];
          echo " <option value='$type'>$type</option>";
        }
        ?>

      </select>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">文章内容：</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
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