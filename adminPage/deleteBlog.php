<?php
session_start();
$userName = $_SESSION['RightUserName'];
require_once('../conn.php');
$blog_id = $_GET['blog_id'];

$sql = "delete from blog_content where blog_id = $blog_id"; //根据id删除

if (mysqli_query($conn, $sql)) {
  echo "<script>alert('成功删除');
    window.location='./myadminPage.php?userName=$userName'</script>";
} else {
  echo '删除失败' . mysqli_affected_rows($conn) . '条数据';
  header("refresh:3;./myadminPage.php?userName=$userName"); //等待指定的时间，然后再跳转到指定页面。
  print('正在加载，请稍等...<br>三秒后自动跳转到首页');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>删除博客</title>
</head>

<body>

</body>

</html>