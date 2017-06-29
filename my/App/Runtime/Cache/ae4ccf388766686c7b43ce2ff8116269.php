<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>用户信息输出</title>
  <link href="__ROOT__/Public/Css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="405" border="1" cellpadding="1" cellspacing="0" bordercolor="#99CC33">
  <tr>
    <td colspan="4" class="title" align="center">当前登录用户：<?php echo ($_SESSION['admin']); ?></td>
  </tr>
  <tr>
    <td colspan="4" class="title" align="center">
      <form method="post" action="__APP__/Index/main">
        站内搜索：
        <input type="text" name="key" placeholder="请输入查询语句">
        <input type="submit">
      </form>
    </td>
  </tr>
  <tr>
    <td colspan="4" class="title" align="center">用户信息</td>
  </tr>
  <tr class="title">
    <td width="44">ID</td>
    <td width="120">用户</td>
    <td width="120">密码</td>
    <td width="223">地址</td>
  </tr>
  <?php if(is_array($select)): foreach($select as $key=>$user): ?><tr class="content">
      <td>&nbsp;<?php echo ($user["id"]); ?></td>
      <td>&nbsp;<?php echo ($user["user"]); ?></td>
      <td>&nbsp;<?php echo ($user["pass"]); ?></td>
      <td>&nbsp;<?php echo ($user["address"]); ?></td>
    </tr><?php endforeach; endif; ?>
  <tr class="content">
    <td colspan="4">&nbsp;<?php echo ($page); ?></td>
  </tr>
</table>
</body>
</html>