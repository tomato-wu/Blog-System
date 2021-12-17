<?php
session_start();
$userName = $_SESSION['RightUserName'];
require_once('../conn.php');
$type = $_POST['type'];

$sql = "insert into blog_type(userName,type) value ('$userName','$type')";
$result = mysqli_query($conn, $sql);
if ($result) {
  echo "<script>alert('创建成功');//弹出框
window.location='./myadminPage.php?userName=$userName'</script>";
} else {
  echo "<script>alert('创建失败');
window.location='./myadminPage.php?userName=$userName'</script>";
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