<div class="col-md-8">
  <h2 class="pb-4 mb-5 mt-4 fst-italic border-bottom">
    我的博客
  </h2>
  <?php
  // $sql = "SELECT * FROM blog_content where userName=$userName";
  // $result = mysqli_query($conn, $sql);
  // while ($row = mysqli_fetch_array($result)) {
  //   $blogTitle = $row['title'];
  //   echo "<li class=\"list-group-item\"><a style='color: black' href=''>$blogTitle</a></li>";
  // }
  if (isset($_GET['type'])) {
    $result = mysqli_query($conn, "SELECT * FROM blog_content where userName=$userName and type like '%{$_GET['type']}%' ");
  } else {
    $result = mysqli_query($conn, "SELECT * FROM blog_content where userName=$userName");
  }
  while ($row = mysqli_fetch_array($result)) {
  ?>
    <?php echo "<li class=\"list-group-item\"><a style='color: black' href='#'>{$row['title']} </a></li>" ?>
  <?php
  }

  ?>

</div>