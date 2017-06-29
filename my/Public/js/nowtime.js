window.onload = setInterval(function () {
    var date = new Date();
    var hour = date.getHours();
    var second = date.getSeconds();
    var minute = date.getMinutes();
    minute = minute<10?'0'+minute:minute;
    second = second<10?'0'+second:second;
    document.getElementById('demo').innerHTML = hour+':'+minute+':'+second;
},1000);
