<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="__ROOT__/Public/Css/index.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="__ROOT__/Public/js/jquery-1.4.2.js"></script>
    <title>页面提示</title>
</head>
<body>
<table width="750" border="0" cellspacing="0" cellpadding="0" >
    <tr>
        <td align="center"><?php echo ($hint); ?></td>
    </tr>
    <tr>
        <td align="center">
            <span class="spanT">3</span>
            秒后自动跳转，如未跳转，请单击
            <a href="<?php echo ($url); ?>">这里<?php echo ($url); ?></a>
        </td>
    </tr>
</table>
<script type="text/javascript">
    $(function(){  //$ 就是JQuery
        time();
    });
    var times=$("span").text(); //$("span")span选择器 调用 text()方法
    function time(){
        if(times==0){
            var url=$("a").attr('href'); //attr('href') 获取属性的值
            window.location.href=url;
        }else{
            window.setTimeout('time()',800); //setTimeout('time()',600) 设置计时器
            times=times-1;
            $("span").text(times);  //text(times) 设置
        }
    }
</script>
</body>
</html>