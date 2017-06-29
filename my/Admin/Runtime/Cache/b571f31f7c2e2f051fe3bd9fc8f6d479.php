<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>后台管理</title>
	<script src="__ROOT__/Public/js/jquery-1.4.2.js"></script>
	<!--<script src="http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js"></script>-->
	<style>
		body,p,ul,li{
			margin: 0;
			padding: 0;
		}
		ul li{
			list-style: none;
		}
		body{
			font-size: 13px;
		}
		.menu{
			width: 110px;
			margin-top: 50px;
			margin-left: 15px;
			border: 2px yellow solid;
		}
		.menu p{
			height: 25px;
			line-height: 25px;
			font-weight: bold;
			background: greenyellow;
			border-bottom: 1px solid sandybrown;
			padding-left: 10px;
			cursor: pointer;
		}
		.menu ul{
			display: none;
		}
		.menu ul li{
			height: 24px;
			line-height: 24px;
			padding-left: 10px;
			background-color: sandybrown ;
		}
	</style>
</head>
<script>
	$(function () {
		$('p').click(function () {
			$(this).next('ul').slideDown(1000);
            $(this).next('ul').siblings('ul').slideUp(1000);
        })
    })
</script>
<body>
<div class="menu">
	<p>数据</p>
	<ul>
		<li><a href="__URL__/adminIndex?type_link=data&handle=insert">数据添加</a></li>
		<li><a href='__URL__/adminIndex?type_link=data&handle=admin'>数据管理</a></li>
		<li><a href="https://www.baidu.com/">百度</a></li>
	</ul>
	<p>类别</p>
	<ul>
		<li><a href="__URL__/adminIndex?type_link=<?php echo ($_GET['type_link']); ?>&handle=insert">类别添加</a></li>
		<li><a href="__URL__/adminIndex?type_link=<?php echo ($_GET['type_link']); ?>&handle=admin">类别管理</a></li>
		<li><a href="https://www.baidu.com/">百度</a></li>
	</ul>
	<p>其他</p>
	<ul>
		<li><a href="__URL__/logout">退出</a></li>
		<li><a href="https://www.baidu.com/">百度</a></li>
	</ul>
</div>
</body>
</html>