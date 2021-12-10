 <?php
  //连接数据库
  require_once("../../conn.php");
  $name = $_POST['name'];
  $info = $_POST['info'];
  $userName = $_POST['userName'];

  $sql = "UPDATE users SET name='$name',info='$info' WHERE userName='$userName'";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "<script>alert('修改成功');//弹出框
  window.location='../BlogHomePage.php?type=settingPage'</script>";
  } else {
    echo "<script>alert('修改失败');
  window.location='../BlogHomePage.php?type=settingPage'</script>";
  }
  ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
 </head>

 <body>
   <p>
     <?php
      echo ($_POST['name']);
      echo ($_POST['info'])
      ?>
   </p>

 </body>

 </html>