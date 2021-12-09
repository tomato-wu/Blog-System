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
</head>
<h1>
  <?php
  echo $title;
  ?>
</h1>
<p>
  <?php echo $time ?>
  &nbsp;&nbsp;
  <?php echo $name ?></p>

<p><?php echo $content ?></p>

<body>

</body>

</html>