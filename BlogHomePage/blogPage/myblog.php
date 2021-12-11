<div class="col-md-8">
  <h2 class="pb-4 mb-5 mt-4 fst-italic border-bottom">
    我的博客
  </h2>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>博客标题</th>
        <th>博客分类</th>
      </tr>
    </thead>
    <tbody>

      <?php
      $sql = "SELECT * FROM blog_content where userName=$userName";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_array($result)) {
        $blogTitle = $row['title'];
        $blogType = $row['type'];
        $blog_id = $row['blog_id'];

      ?>
        <tr>
          <td><?php echo "<li class='list-group-item'><a style='color: black' href='../BlogDetail/myBlogDetail.php?blog_id=$blog_id'>$blogTitle</a></li>"; ?></td>
          <td><?php echo "<li class='list-group-item'><a style='color: black' href='../BlogDetail/myBlogDetail.php?blog_id=$blog_id'>$blogType</a></li>"; ?></td>
        </tr>

      <?php
      }
      ?>
    </tbody>

  </table>

</div>