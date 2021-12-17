<?php
session_start();
require_once('../conn.php');
$userName = $_SESSION['RightUserName'];

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

    .table {
      width: 75vw;
    }

    .backBtnStyle {
      position: absolute;
      top: 80px;
      right: 80px;
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
    <a class="btn btn-primary btn-lg backBtnStyle" href="../BlogHomePage/BlogHomePage.php?type=myblog" role="button">返回主页</a>
  </div>



  <!-- 下边的分类导航栏 -->
  <div class="container">
    <div class="row">
      <!-- 导航栏 -->
      <div class="col-2">
        <ul class="nav flex-column">
          <!-- 创建分类 -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">创建分类</button>
          <!-- 弹出框 -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">创建分类</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="post" action="./addFenLei.php">
                    <!-- 分类名称 -->
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">分类名称:</label>
                      <input type="text" class="form-control" id="recipient-name" name="type" value="">
                    </div>
                    <!-- 按钮 -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button class="btn btn-primary">创建</button>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
          <!-- 弹出框 -->

          <!-- <button type="button" class="btn btn-primary" onclick="addFenLei()">不啊分类</button> -->
          <li class='nav-item'><a class='nav-link active' href="./myadminPage.php?userName=<?php echo $userName ?>">全部</a></li>
          <?php
          $sql = "SELECT * FROM blog_type where userName=$userName";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) {
            global $blogType;
            $blogType = $row['type'];
            echo "<li class='nav-item'><a class='nav-link active' href='./myadminPage.php?BlogTypeValue=$blogType'>$blogType</a></li>";
          }
          ?>
        </ul>
      </div>

      <!-- 右边显示的界面 -->
      <div class="col-9">
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

            <?php

            // 点击侧边栏的时候显示不同类别的博客
            if (isset($_GET['BlogTypeValue'])) {
              $sql =  "SELECT * FROM blog_content where userName=$userName and type like '%{$_GET['BlogTypeValue']}%' ";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_array($result)) {
                $blog_id = $row['blog_id'];
                $name = $row['name'];
                $type = $row['type'];
                $blogTitle = $row['title'];
                $create_time = $row['create_time'];

                echo "
                      <tr>
                        <th scope='row'>$blog_id</th>
                        <td>$type</td>
                        <td> $blogTitle</td>
                        <td>$create_time</td>
                        <td>
                          <a href='../BlogDetail/editBlog.php?blog_id=$blog_id'>编辑</a>
                          <a href='./deleteBlog.php?blog_id=$blog_id'>删除</a>
                        </td>
                      </tr>
                      ";
              }
            }
            // 刚进来的时候显示所有的博客
            if (isset($_GET['userName'])) {
              $sql = "SELECT * FROM blog_content where userName=$userName";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_array($result)) {
                $blog_id = $row['blog_id'];
                $name = $row['name'];
                $type = $row['type'];
                $blogTitle = $row['title'];
                $create_time = $row['create_time'];

                echo "
                <tr>
                <th scope='row'>$blog_id</th>
                <td>$type</td>
                <td> $blogTitle</td>
                <td>$create_time</td>
                <td>
                    <a href='../BlogDetail/editBlog.php?blog_id=$blog_id'>编辑</a>
                    <a href='./deleteBlog.php?blog_id=$blog_id'>删除</a>
                </td>
              </tr>
              ";
              }
            }

            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script>
    function addFenLei() {
      window.location = '../BlogHomePage/BlogHomePage.php?type=myblog';
    }
  </script>
</body>

</html>