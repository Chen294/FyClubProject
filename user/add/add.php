<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无忧论坛-发帖</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<header>
		<div class="header">
			<div class="user"><?php
				session_start();
if(!empty($_SESSION['t_name']))
    echo "<a href=\"#\">欢迎您，{$_SESSION['t_name']}</a>";
else
    echo '<a href="../login/login.html">请登陆</a>';
?>
		</div>
	</header>
	<div class="div-form">
		<form action="check.php" class="form" method="post">
			<h2 align="center">说点什么吧</h2>
			<div class="div-form-element">
				<input type="text" class="element-style" name="title" placeholder="文章标题" autocomplete="off">
			</div>
			<div class="div-form-element">
				<textarea class="element-style-intro" name="intro" placeholder="文章简介"></textarea>
			</div>
			<div class="div-form-element-text">
				<textarea class="element-style-text" name="content" placeholder="文章内容"></textarea>
			</div>
			
			<div class="div-form-element-btn">
				<input type="submit" value="发帖" class="btn" name="add">
			</div>
		</form>
	</div>
</body>
</html>
