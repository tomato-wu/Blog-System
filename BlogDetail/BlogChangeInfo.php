<?php
require_once('../conn.php');
$title = $_POST['title'];
$content = $_POST['content'];
$blog_id = $_POST['blog_id'];
$sql = "UPDATE blog_content SET title='$title',content='$content' WHERE blog_id='$blog_id'";
$result = mysqli_query($conn, $sql);
if ($result) {
  echo "<script>alert('发布成功');//弹出框
window.location='myBlogDetail.php?blog_id=$blog_id'</script>";
} else {
  echo "<script>alert('修改失败');
window.location='myBlogDetail.php?blog_id=$blog_id'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta title="viewport" content="width=device-width, initial-scale=1.0">
  <title>博客修改</title>
</head>

<body>
  <h1>
    <?php

    echo $title;
    echo $content;
    ?>
  </h1>

</body>

</html>