<?php

require_once("conn.php");
$q = isset($_GET["q"]) ? $_GET["q"] : '';


$sql = "SELECT * FROM users where userName='$q'";

$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result);
if ($count > 0) {
  echo "";
} else {
  echo "该账号不存在，请先去注册";
}
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ajax验证用户名是否已经注册</title>
</head>

<body>

</body>

</html>