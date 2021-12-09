<?php
require_once('../conn.php');
$blog_id = $_GET['blog_id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>编辑页面</title>
</head>

<body>
  <h1>
    <?php
    echo $blog_id;
    ?>
  </h1>
</body>

</html>