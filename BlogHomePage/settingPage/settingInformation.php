<div class="col-md-8">
  <h2 class="pb-4 mb-5 mt-4 fst-italic border-bottom">
    个人账户信息修改
  </h2>
  <?php
  $sql = "SELECT * FROM users where userName=$userName";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_array($result)) {
    $name = $row['name'];
    $info = $row['info'];
  }
  ?>
  <form method="post" action="changeInfo.php">
    <!-- 用户昵称 -->
    <div class="mb-3 row">
      <label for="inputPassword" class="col-sm-2 col-form-label">用户昵称</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputPassword" name="name" value="<?php echo $name ?>">
      </div>
    </div>

    <!-- 个人简介 -->
    <div class="mb-3 row">
      <label for="inputPassword" class="col-sm-2 col-form-label">个人简介</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="info"><?php echo $info ?></textarea>
      </div>
    </div>
    <input type="button" class="btn btn-outline-primary btnStyle" value="修改"></input>
  </form>
</div>