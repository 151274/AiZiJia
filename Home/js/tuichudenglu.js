
//退出登录
var tuichu_denglu=document.querySelector('.right_two .user>a');
var tuichu_denglu_transform="up";
tuichu_denglu.onclick = function () {
    if(tuichu_denglu_transform=="down") {
        tuichu_denglu_transform="up";
        tuichu_denglu.style["transform"] = "rotate(-90deg)";
        $(".right_two .user .erji").slideToggle(400);
    }else if(tuichu_denglu_transform=="up"){
        tuichu_denglu_transform="down";
        tuichu_denglu.style["transform"] = "rotate(90deg)";
        $(".right_two .user .erji").slideToggle(400);
    }
}

