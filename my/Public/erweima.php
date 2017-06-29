<!DOCTYPE html>
<html lang="en">
<head>
    <title>Javascript 二维码生成库：QRCode</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
    <script type="text/javascript" src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://static.runoob.com/assets/qrcode/qrcode.min.js"></script>
</head>
<body>
<input id="text" type="hidden" value="<?php $text1=$_GET['text1']; echo $text1?>"/>
<div id="qrcode" style="width:250px; height:250px; margin-top:15px;"></div>
<script type="text/javascript">
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        width : 200,
        height : 200
    });
    function makeCode () {
        var elText = document.getElementById("text");
        if (!elText.value) {
            alert("Input a text");
            elText.focus();
            return;
        }
        qrcode.makeCode(elText.value);
    }
    makeCode();
    $("#text").
    on("blur", function () {
        makeCode();
    }).
    on("keydown", function (e) {
        if (e.keyCode == 13) {
            makeCode();
        }
    });
</script>
</body>
</html>
