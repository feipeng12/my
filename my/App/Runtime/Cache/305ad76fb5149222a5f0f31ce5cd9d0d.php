<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>详情</title>
  <link href="__ROOT__/Public/Css/style.css" rel="stylesheet" type="text/css" />
  <script src="__ROOT__/Public/js/nowtime.js"></script>
</head>
<body>
<p>当前时间为:</p><span id="demo"></span>
<div class="findName_one responsive">
  <?php if(is_array($select)): $i = 0; $__LIST__ = $select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$my1): ++$i;$mod = ($i % 2 )?><strong>id为:<?php echo ($my1["id"]); ?></strong>
    <h3>
      标题为:<?php echo ($my1["title"]); ?><br>
      百度云盘链接:<a href="<?php echo ($my1["link"]); ?>" target="_blank"><?php echo ($my1["link"]); ?></a><br>
      <p>文本框中可以自定义网址或词语，点击生成二维码后可以对应的生成二维码 网页刷新后二维码恢复到初始状态 鼠标移动到二维码上可以显示二维码的内容</p>
      <form action="__ROOT__/Public/erweima.php" method="get">
        <input type="text" name="text1" value="<?php echo ($my1["link"]); ?>" style="width: 80%">
        <input type="submit" value="生成二维码">
      </form>
      密码：<?php echo ($my1["pwd"]); ?>
    </h3><br>
    <h4>带有蓝色边框的文本框宽高可以变大 具体做法鼠标放到该对象的右下角鼠标往右下角或右拉伸(谷歌)或者360极速浏览器切换到极速模式有效果</h4>
    <p class="content <?php echo ($my1["content0_status0"]); ?>"><?php echo ($my1["content0"]); ?></p>
    <a href="<?php echo ($my1["images0"]); ?>" class="<?php echo ($my1["images0_status0"]); ?>">
      <img src="<?php echo ($my1["images0"]); ?>" alt="NotWay" class="<?php echo ($my1["images0_status0"]); ?>">
    </a>
    <p class="content <?php echo ($my1["content1_status1"]); ?>"><?php echo ($my1["content1"]); ?></p>
    <a href="<?php echo ($my1["images1"]); ?>" class="<?php echo ($my1["images1_status1"]); ?>">
      <img src="<?php echo ($my1["images1"]); ?>" class="<?php echo ($my1["images1_status1"]); ?>" alt="NotWay">
    </a>
    <p class="content <?php echo ($my1["content2_status2"]); ?>"><?php echo ($my1["content2"]); ?></p>
    <a href="<?php echo ($my1["images2"]); ?>" class="<?php echo ($my1["images2_status2"]); ?>">
      <img src="<?php echo ($my1["images2"]); ?>" class="<?php echo ($my1["images2_status2"]); ?>" alt="NotWay">
    </a>
    <p class="content <?php echo ($my1["content3_status3"]); ?>"><?php echo ($my1["content3"]); ?></p>
    <a href="<?php echo ($my1["images3"]); ?>" class="<?php echo ($my1["images3_status3"]); ?>">
      <img src="<?php echo ($my1["images3"]); ?>" class="<?php echo ($my1["images3_status3"]); ?>" alt="NotWay">
    </a>
    <p class="content <?php echo ($my1["content4_status4"]); ?>"><?php echo ($my1["content4"]); ?></p>
    <a href="<?php echo ($my1["images4"]); ?>" class="<?php echo ($my1["images4_status4"]); ?>">
      <img src="<?php echo ($my1["images4"]); ?>"class="<?php echo ($my1["images4_status4"]); ?>" alt="NotWay">
    </a>
    <p class="content <?php echo ($my1["content5_status5"]); ?>"><?php echo ($my1["content5"]); ?></p>
    <a href="<?php echo ($my1["images5"]); ?>" class="<?php echo ($my1["images5_status5"]); ?>">
      <img src="<?php echo ($my1["images5"]); ?>" class="<?php echo ($my1["images5_status5"]); ?>" alt="NotWay">
    </a>
    <p class="content <?php echo ($my1["content6_status6"]); ?>"><?php echo ($my1["content6"]); ?></p>
    <a href="<?php echo ($my1["images6"]); ?>" class="<?php echo ($my1["images6_status6"]); ?>">
      <img src="<?php echo ($my1["images6"]); ?>" class="<?php echo ($my1["images6_status6"]); ?>" alt="NotWay">
    </a>
    <p class="content <?php echo ($my1["content7_status7"]); ?>"><?php echo ($my1["content7"]); ?></p>
    <a href="<?php echo ($my1["images7"]); ?>" class="<?php echo ($my1["images7_status7"]); ?>">
      <img src="<?php echo ($my1["images7"]); ?>" class="<?php echo ($my1["images7_status7"]); ?>" alt="NotWay">
    </a>
    <p class="content <?php echo ($my1["content8_status8"]); ?>"><?php echo ($my1["content8"]); ?></p>
    <a href="<?php echo ($my1["images8"]); ?>" class="<?php echo ($my1["images8_status8"]); ?>">
      <img src="<?php echo ($my1["images8"]); ?>" class="<?php echo ($my1["images8_status8"]); ?>" alt="NotWay">
    </a><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<a href="__URL__/index">
  <img src="__ROOT__/Public/images/myindex.png"/>
</a>
</body>
</html>