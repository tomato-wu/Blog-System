<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>博客网站登录界面</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
    body {
      background-image: url(../assets/images/csdn.jpg);
    }
  </style>
</head>

<body>
  <section>
    <div class="container">
      <!-- 注册模块======================================================================================================== -->

      <div class="user singinBx">
        <div class="imgBx"><img src="../assets/images/p3.jpg" alt=""></div>
        <div class="formBx">
          <!-- 表单 -->
          <form action="addUser.php" method="post" target="_blank" name="RegisterFormBox" onsubmit="return registerBtn()">
            <h2>注册界面</h2>
            <input class="text" type="text" placeholder="手机号码" name="RegisterUserName">
            <input class="text" type="password" placeholder="密码" name="userPass1">
            <input class="text" type="password" placeholder="确认密码" name="userPass2">
            <input class="text" type="text" placeholder="昵称" name="name">

            <input type="submit" name="userSubmit" value="注册">
            <p class="signup">点击返回登录？<a href="#" onclick="
                            goBackLogin();">登录</a></p>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript">
    function goBackLogin() {
      window.location.href = "../index.php";
    }
    // 注册表单验证
    function registerBtn() {
      if ((document.RegisterFormBox.RegisterUserName.value != '') && (document.RegisterFormBox.userPass1.value != '') && (document.RegisterFormBox
          .userPass2.value != '') && (document.RegisterFormBox.name.value != '')) {
        // 判断用户名格式是否正确
        isNum = /^[0-9]*$/;
        var user = document.RegisterFormBox.RegisterUserName.value;
        var result = isNum.test(user);
        if (!result) {
          alert("用户名格式不正确，只能为数字")
          return false
        } else if (document.RegisterFormBox.userPass1.value != document.RegisterFormBox.userPass2.value) {
          alert("前后两次密码输入不一致，注册失败！")
          return false
        } else {
          return true
        }
      } else {
        alert("注册的账号密码和真实姓名不为空")
        return false
      }
    }
  </script>
</body>

</html>