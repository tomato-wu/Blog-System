<?php
require_once("conn.php");
?>
<?php
$username = $_POST['userName'];
$userpass = $_POST['userPass'];
if (isset($username) && isset($userpass)) { //判断用户名和密码均不为空
	$sql = "SELECT * FROM users  where userName='{$_POST['userName']}' and password='{$_POST['userPass']}' ";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);
	if ($count == 0) {
?>
		<script>
			alert("密码错误")
			window.location = "./index.php"
		</script>
<?php
	} else {
		header("Location:./BlogHomePage/BlogHomePage?type=myblog.php");
	}
}

mysqli_close($conn);
?>