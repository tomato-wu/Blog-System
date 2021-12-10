<?php
session_start();
$userName = $_SESSION['RightUserName'];
$sql = "SELECT * FROM users where userName=$userName";
$result = mysqli_query($conn, $sql);

require_once('../conn.php');
$name = $_POST['name'];
$title = $_POST['title'];
$content = $_POST['content'];
$type =   $_POST['type'];


$sql = "insert into blog_content(userName,name,type,title,content,create_time) value ('$userName','$name','$type','$title','$content',CURRENT_TIMESTAMP)";
$result = mysqli_query($conn, $sql);
if ($result) {
  echo "<script>alert('发布成功');//弹出框
window.location='../BlogHomePage/BlogHomePage.php?type=myblog'</script>";
} else {
  echo "<script>alert('发布失败');
window.location='../BlogHomePage/BlogHomePage.php?type=myblog'</script>";
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
  </h1>

</body>

</html>