<div class="col-md-4">
  <div class="position-sticky" style="top: 2rem;">
    <div class="p-4 mb-3 bg-light rounded">
      <?php
      echo "在线用户：" . $_SESSION['RightUserName'] . "    <a href='logout.php'>退出</a><hr>";
      ?>
      <h4 class="fst-italic">博客简介</h4>
      <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers,
        content, or something else entirely. Totally up to you.</p>
    </div>

    <div class="p-4">
      <h4 class="fst-italic">我的专栏</h4>
      <ol class="list-unstyled mb-0">
        <li><a href="#">前端</a></li>
        <li><a href="#">vscode</a></li>
        <li><a href="#">vue</a></li>
        <li><a href="#">php</a></li>
        <li><a href="#">xmapp</a></li>
        <li><a href="#">apache</a></li>
        <li><a href="#">数据库</a></li>
        <li><a href="#">linux</a></li>
        <li><a href="#">计算机网络</a></li>
        <li><a href="#">生活</a></li>
        <li><a href="#">git和github</a></li>
        <li><a href="#">java</a></li>
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