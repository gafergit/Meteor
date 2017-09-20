<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="./assets/css/style.css">
	<title>错误！</title>
</head>
<script language=javascript>
          setTimeout('window.location="./"',5000)
      </script>
<body style="background:#5c9acf">
	<div class="body">
		<div class="box" style="color:#e9ecf3 !important; width: 900px;">
			<i class="icon iconfont"><?php if(@$_GET['code'] == "10403"){ echo '&#xe60e';}; ?></i>
			<h2><?php if(@$_GET['code'] == "10403"){ echo '您没有访问的权限！';}; ?>
			</h2>
			<p><?php if(@$_GET['code'] == "10403"){ echo '这意味这你无法进入此功能，如有疑问请联系管理员。';}; ?>
			</p>
		</div>
	</div>
</body>

</html>
