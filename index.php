<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>博客网站登录界面</title>
  <link rel="stylesheet" href="./css/style.css">
  <style>
    body {
      background-image: url(./assets/images/csdn.jpg);
    }

    span {
      color: red;
      font-size: 8px;
    }
  </style>
</head>

<body>
  <!-- <section> 标签定义文档中的节（section、区段）。比如章节、页眉、页脚或文档中的其他部分。 -->
  <section>
    <div class="container">
      <!-- 学生端登录模块======================================================================================================== -->

      <div class="user singinBx">
        <div class="imgBx"><img src="./assets/images/p3.jpg" alt=""></div>
        <div class="formBx">
          <!-- 表单 -->
          <form action="loginUser.php" method="post" target='_blank' name="formBox" onsubmit="return LoginBtn()">
            <h2>登录</h2>
            <input type="text" placeholder="账号" name="userName" onblur="checkLoginName(this.value)">
            <span id="LoginText"> </span>
            <input type="password" placeholder="密码" name="userPass">
            <input type="submit" name="userSubmit" value="登录">
            <p class="signup">是否是有账号？<a href="#" onclick="
                            toggleForm();">去注册</a></p>
          </form>
        </div>
      </div>

      <!-- 注册模块============================================================================================================ -->

      <div class="user singupBx">
        <div class="formBx">
          <!-- 表单 -->
          <form action="addUser.php" method="post" target="_blank" name="RegisterFormBox" onsubmit="return registerBtn()">
            <h2>注册</h2>
            <input class="text" type="text" placeholder="手机号码" name="RegisterUserName" onblur="checkFirstName(this.value)">
            <span id="txtHint"> </span>
            <input class="text" type="password" placeholder="密码" name="userPass1">
            <input class="text" type="password" placeholder="确认密码" name="userPass2" onblur="checkPassword(this.value)">
            <span id="DoCheckPassword"> </span>
            <input class="text" type="text" placeholder="昵称" name="name">
            <input type="submit" name="adminSubmit" value="注册">
            <p class="signup">已经拥有账号?<a href="#" onclick="
                            toggleForm();">去登录</a></p>
          </form>
        </div>
        <div class="imgBx"><img src="./assets/images/p4.jpg" alt=""></div>
      </div>
    </div>
  </section>
  <script type="text/javascript">
    function toggleForm() {
      var container = document.querySelector('.container');
      //             这个方法可以给dom元素添加类，消除类。
      // 如下面代码片段，当点击toggle标签时，会给这个标签添加和消除“active”类
      container.classList.toggle('active')
    }

    // 登录表单验证
    function LoginBtn() {
      if ((document.formBox.userName.value != '') && (document.formBox.userPass.value != '')) {
        // 判断用户名格式是否正确
        isNum = /^[0-9]*$/;
        var user = document.formBox.userName.value;
        var result = isNum.test(user);
        if (!result) {
          alert("用户名格式不正确，只能为数字")
          return false
        } else {
          return true
        }
      } else {
        alert("账号密码不能为空")
        return false
      }
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

    // ajax验证注册的电话号码是否已经使用
    function checkFirstName(str) {
      if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
      }
      if (window.XMLHttpRequest) {
        // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
        xmlhttp = new XMLHttpRequest();
      } else {
        // IE6, IE5 浏览器执行代码
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
        }
      }
      xmlhttp.open("GET", "checkName.php?q=" + str + "&t=" + Math.random(), true);
      xmlhttp.send();
    }

    // ajax验证注册的电话号码是否已经使用
    function checkLoginName(str) {
      if (str == "") {
        document.getElementById("LoginText").innerHTML = "";
        return;
      }
      if (window.XMLHttpRequest) {
        // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
        xmlhttp = new XMLHttpRequest();
      } else {
        // IE6, IE5 浏览器执行代码
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          document.getElementById("LoginText").innerHTML = xmlhttp.responseText;
        }
      }
      xmlhttp.open("GET", "checkLoginName.php?q=" + str + "&t=" + Math.random(), true);
      xmlhttp.send();
    }


    // 验证两次密码是否相同
    function checkPassword(password) {
      if (document.RegisterFormBox.userPass1.value != password) {
        document.getElementById("DoCheckPassword").innerHTML = "前后两次密码不一致";
      }
    }
  </script>
</body>

</html>