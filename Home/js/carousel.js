$(document).ready(function(){

    var i = 0;
    var clone = $(".banner .pic ul li").first().clone();//克隆第一张图片
    $(".banner .pic ul").append(clone);//复制到列表最后
    var size = $(".banner .pic ul li").size();
    for (var j = 0; j < size-1; j++) {
        $(".banner_btn ul").append("<li><span></span></li>");
    }
    $(".banner_btn ul li").first().addClass("first");

    /*自动轮播*/
    var t = setInterval(function () { i++; move();},3000);

    /*鼠标悬停事件*/
    // $(".banner").hover(function () {
    //     clearInterval(t);//鼠标悬停时清除定时器
    // }, function () {
    //     t = setInterval(function () { i++; move(); }, 3000); //鼠标移出时清除定时器
    // });

    /*鼠标滑入原点事件*/
    $(".banner_btn ul li").click(function () {
        var index = $(this).index();//获取当前索引值
        i = index;
        $(".banner .pic ul").stop().animate({ left: -index * 1347 }, 500);
        $(this).addClass("first").siblings().removeClass("first");
    });
    /*移动事件*/
    function move() {
        if (i == size) {
            $(".banner .pic ul").css({ left: 0 });
            i = 1;
        }
        if (i == -1) {
            $(".banner .pic ul").css({ left: -(size - 1) * 1347 });
            i = size - 2;
        }
        $(".banner .pic ul").stop().animate({ left: -i * 1347 }, 500);

        if (i == size - 1) {
            $(".banner_btn ul li").eq(0).addClass("first").siblings().removeClass("first");
        } else {
            $(".banner_btn ul li").eq(i).addClass("first").siblings().removeClass("first");
        }
    }
});