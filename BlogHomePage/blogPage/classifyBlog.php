<div class="col-md-8">
  <h2 class="pb-4 mb-5 mt-4 fst-italic border-bottom">
    我的博客
  </h2>
  <?php
  if (isset($_GET['type'])) {
    $result = mysqli_query($conn, "SELECT * FROM blog_content where user_id = 1 and type like '%{$_GET['type']}%' ");
  } else {
    $result = mysqli_query($conn, "SELECT * FROM blog_content where user_id = $userId");
  }
  while ($row = mysqli_fetch_array($result)) {
  ?>
    <?php echo "<li class=\"list-group-item\"><a style='color: black' href='index.php?blog_id={$row['blog_id']}'>{$row['title']} </a></li>" ?>
  <?php
  }
  ?>
</div>