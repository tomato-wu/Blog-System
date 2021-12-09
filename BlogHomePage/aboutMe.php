<div class="col-md-4">
  <div class="position-sticky" style="top: 2rem;">
    <div class="p-4 mb-3 bg-light rounded">

      <h4 class="fst-italic">关于我</h4>
      <p class="mb-0">
        <?php
        echo $info;
        ?>
      </p>
    </div>

    <div class="p-4">
      <h4 class="fst-italic">我的专栏</h4>
      <ol class="list-unstyled mb-0">
        <?php
        $sql = "SELECT * FROM blog_type where userName=$userName";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
          global  $blogType;
          $blogType = $row['type'];
          echo "<li><a href='BlogHomePage.php?type=$blogType'>$blogType</a></li>";
        }
        ?>
      </ol>
    </div>

    <div class="p-4">
      <h4 class="fst-italic">我的项目</h4>
      <ol class="list-unstyled">
        <li><a href="#">GitHub</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Facebook</a></li>
      </ol>
    </div>
  </div>
</div>