<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>信息浏览</title>
	<link href="__ROOT__/Public/Css/style.css" rel="stylesheet" type="text/css" />
	<script src="__ROOT__/Public/js/nowtime.js"></script>
</head>
<body>
<p>当前时间为:</p><span id="demo"></span>
<table width="80%" border="1" cellpadding="1" cellspacing="0" bordercolor="#99CC33">
	<tr>
		<td colspan="2" class="title" align="center">
			<form method="post" action="__APP__/Index/index">
				站内搜索：<input type="text" name="key" placeholder="请输入关键词"><input type="submit">
			</form>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="title" align="center">信息浏览</td>
	</tr>
	<tr class="title">
		<td width="44">ID</td>
		<td width="120">标题</td>
	</tr>
	<?php if(is_array($select)): foreach($select as $key=>$my1): ?><tr class="content">
			<td><?php echo ($my1["id"]); ?></td>
			<td><a href="__URL__/findName?id=<?php echo ($my1["id"]); ?>" target="_blank"><?php echo ($my1["title"]); ?></a></td>
		</tr><?php endforeach; endif; ?>
	<tr class="content">
		<td colspan="2"><?php echo ($page); ?></td>
	</tr>
</table>
<img src="__ROOT__/Public/images/myindex.png"/>
</body>
</html>