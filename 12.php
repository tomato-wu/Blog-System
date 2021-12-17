<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <div class="container mt-3">
    <h3>水平和垂直方向都居中显示</h3>
    <p>点击按钮打开模态框</p>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
      打开模态框
    </button>
  </div>

  <!-- 模态框 -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- 模态框头部 -->
        <div class="modal-header">
          <h4 class="modal-title">模态框标题</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- 模态框内容 -->
        <div class="modal-body">
          模态框内容..
        </div>

        <!-- 模态框底部 -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">关闭</button>
        </div>

      </div>
    </div>
  </div>


</body>

</html>