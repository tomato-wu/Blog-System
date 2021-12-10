<?php
require_once('../conn.php');
$userName = $_GET['userName'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>后台管理界面</title>
  <!-- bootstrap4 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <style>
    .container {
      position: relative;
      left: -120px;
      top: -10px;
      height: 5vh;
    }
  </style>
</head>

<body>
  <!-- 巨幕说明 -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-5">博客后台管理界面</h1>
      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
  </div>

  <!-- 下边的分类导航栏 -->
  <div class="container">
    <div class="row">
      <!-- 导航栏 -->
      <div class="col-4">
        <ul class="nav flex-column">

          <?php
          $sql = "SELECT * FROM blog_type where userName=$userName";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) {
            global $blogType;
            $blogType = $row['type'];
            echo "<li class='nav-item'><a class='nav-link active' href='#'>$blogType</a></li>";
          }
          ?>

        </ul>
      </div>

      <!-- 右边显示的界面 -->
      <div class="col-8">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">博客编号</th>
              <th scope="col">类别</th>
              <th scope="col">标题</th>
              <th scope="col">发布时间</th>
              <th scope="col">操作</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>

            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>