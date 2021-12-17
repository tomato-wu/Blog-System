<div class="col-md-4">
  <div class="position-sticky" style="top: 2rem;">
    <div class="p-4 mb-3 bg-light rounded">

      <h4 class="fst-italic">关于作者</h4>

      <div class="card mb-3">
        <img src="../assets/images/code.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $name; ?></h5>
          <p class="card-text"><?php echo $info; ?></p>
        </div>
        <div class="p-4">
          <p class="card-text"><small class="text-muted">我的专栏</small></p>
          <ol class="list-unstyled mb-0">
            <li><a href='./BlogHomePage.php?type=myblog'>全部</a></li>
            <?php
            $sql = "SELECT * FROM blog_type where userName=$userName";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
              global $blogType;
              $blogType = $row['type'];
              echo "<li><a href='BlogHomePage.php?blogType=$blogType'>$blogType</a></li>";
            }
            ?>
          </ol>
        </div>
      </div>
      <div class="p-4">
        <h4 class="fst-italic">我的项目</h4>
        <ol class="list-unstyled">
          <li><a href="https://github.com/tomato-wu" target="_blank">GitHub</a></li>
          <li><a href="https://tomato-wu.github.io/" target="_blank">我的个人博客</a></li>
          <li><a href="https://blog.csdn.net/weixin_45644335?spm=1000.2115.3001.5343" target="_blank">我的CSDN</a></li>
        </ol>
      </div>
    </div>
  </div>
</div>