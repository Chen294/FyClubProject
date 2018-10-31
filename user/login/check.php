<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>check</title>
</head>

<body>
	<?php
        session_start();//启session
		/*链接数据库*/
        $link=mysqli_connect('localhost','forumadmin','123456','forum');//数据库连接填入应参数
		mysqli_set_charset($link, "utf8");
	        
            if(!$link)    die("连接数据库失败");
            /*获取处理方式*/
			$way=$_POST['_way'];
            
			/*查询判断*/
	       if($way=="登 录")
		   {
			   $username=$_POST['usrid'];
           	   $userpwd=$_POST['pwd'];
			   $sql="select * from userlogin where username='$username' and userpwd='$userpwd'";
               $rec=mysqli_query($link,$sql) or die ("执行失败");
               if(mysqli_num_rows($rec)>0)
		       {
				   $row = mysqli_fetch_row($rec);
                   $_SESSION['t_name']=$row[1];//session存储记录登录状态
                   echo "登录成功，1秒钟后跳转到主界面";
	               header("Refresh:1;../../index.php");
               }
	           else    echo "<script>alert('密码或用户名错误');history.go(-1);</script>";//登录失败
		   }
	       else if($way=="注 册")
		   {
			   $username=$_POST['usrid'];
           	   $userpwd=$_POST['pwd'];
			   $sql="insert into userlogin (username,userpwd) values ('$username','$userpwd');";
               $rec=mysqli_query($link,$sql) or die ("执行失败");
               echo "注册成功，1秒钟后跳转到登录页面";
	           header("Refresh:1;url=login.html");
		   }
?>
</body>
</html>