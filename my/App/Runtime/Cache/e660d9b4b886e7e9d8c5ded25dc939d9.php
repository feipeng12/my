<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>用户登录</title>
	<link href="__ROOT__/Public/Css/style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="__ROOT__/Public/Js/check.js"></script>
</head>
<body>
<form name="form1" method="post"  action="__URL__/index" onSubmit="return chkinput(this)" >
	<table width="404" height="205" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="2">
				<img src="__ROOT__/Public/images/66_01.gif" width="404" height="53" alt="">
			</td>
		</tr>
		<tr>
			<td>
				<img src="__ROOT__/Public/images/66_02.gif" width="132" height="151" alt="">
			</td>
			<td width="271" height="102" bgcolor="#FaFaFa">
				<table width="265" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td class="title" width="52">用户名：</td>
						<td><input name="user" type="text" size="18" />
						</td>
					</tr>
					<tr>
						<td class="title">密码：</td>
						<td>
							<input name="pass" type="password" size="18" />
						</td>
					</tr>
					<tr>
						<td class="title">验证码：</td>
						<td>
							<input type="text" name="validatorCode" size="8" />
							<input type="hidden" name="defValidatorCode" value="" />
							<script language="javascript">
                                var num1=Math.round(Math.random()*10000000);			//生成随机数
                                var num=num1.toString().substr(0,4);					//截取随机数的前4个字符
                                document.write("<a href='javascript:reCode()' class='content'><img name='codeimg' src='__URL__/validatorcode?code="+num+"'></a>"); //将截取值传递到图像处理页中
                                form1.defValidatorCode.value=num;						//将截取值赋给表单中的隐藏域
                                function reCode(){						//定义方法,重新生成验证码
                                    var num1=Math.round(Math.random()*10000000);	//生成随机数
                                    var num=num1.toString().substr(0,4);			//截取随机数
                                    document.codeimg.src="__URL__/validatorcode?code="+num;	///将截取值传递到图像处理页中
                                    form1.defValidatorCode.value=num;				//将截取值赋给表单中的隐藏域
                                }
							</script>
							<a href="javascript:reCode()" class="content">看不清</a>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td align="center">
				<input type="image" name="imageField" id="imageField" src="__ROOT__/Public/images/66_05.gif" />
			</td>
			<td><input type="reset"></td>
		</tr>
	</table>
</form>
</body>
</html>