<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>后台登录界面</title>
	<link rel="stylesheet" href="__ROOT__/Public/Css/style.css">
</head>
<body>
<div class="admin_index">
	<div>
		<img src="__ROOT__/Public/admin_img/login_01.jpg"/>
	</div>
	<form>
		<table>
			<tr>
				<td align="right">账&nbsp;&nbsp;&nbsp;号:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td align="right">密&nbsp;&nbsp;&nbsp;码:</td>
				<td><input type="password" name="pwd"></td>
			</tr>
			<tr>
				<td align="right">验证码:</td>
				<td><input type="text" name="validatorCode" size="5">
					<input type="hidden" name="defValidatorCode" value="" />
					<script language="javascript">
                        var num1=Math.round(Math.random()*10000000);			//生成随机数
                        var num=num1.toString().substr(0,4);					//截取随机数的前4个字符
                        document.write("<a href='javascript:reCode()'><img name='codeimg' src='__URL__/validatorcode?code="+num+"'></a>"); //将截取值传递到图像处理页中
                        form1.defValidatorCode.value=num;						//将截取值赋给表单中的隐藏域
                        function reCode(){						//定义方法,重新生成验证码
                            var num1=Math.round(Math.random()*10000000);	//生成随机数
                            var num=num1.toString().substr(0,3);			//截取随机数
                            document.codeimg.src="__URL__/validatorcode?code="+num;	///将截取值传递到图像处理页中
                            form1.defValidatorCode.value=num;				//将截取值赋给表单中的隐藏域
                        }
					</script>
					<a href="javascript:reCode()" class="content">看不清</a>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="submit">
					&nbsp;&nbsp;<input type="reset" name="reset">
				</td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>