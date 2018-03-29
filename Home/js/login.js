
//退出
var feihuiyuandenglu=document.getElementById('feihuiyuandenglu');
var feihuiyuanzhuce=document.getElementById('feihuiyuanzhuce');
// var huiyuandenglu=document.getElementById('huiyuandenglu');
var tuichu_feihuiyuandenglu=document.getElementById('feihuiyuandenglu').getElementsByClassName('tuichu')[0];
var tuichu_feihuiyuanzhuce=document.getElementById('feihuiyuanzhuce').getElementsByClassName('tuichu')[0];
// var tuichu_huiyuandenglu=document.getElementById('huiyuandenglu').getElementsByClassName('tuichu')[0];
tuichu_feihuiyuandenglu.onclick = function () {
    feihuiyuandenglu.style["display"]="none";
}
tuichu_feihuiyuanzhuce.onclick = function () {
    feihuiyuanzhuce.style["display"]="none";
}
// tuichu_huiyuandenglu.onclick = function () {
//     huiyuandenglu.style["display"]="none";
// }

// 打开
var denglu=document.getElementsByClassName('header_top')[0].getElementsByClassName('denglu')[0];
var zhuce=document.getElementsByClassName('header_top')[0].getElementsByClassName('zhuce')[0];
var mianfeizhuce=document.getElementById('feihuiyuandenglu').getElementsByClassName('mianfeizhuce')[0];
denglu.onclick = function () {
    feihuiyuandenglu.style["display"] = "block";
}
zhuce.onclick = function () {
    feihuiyuanzhuce.style["display"] = "block";
}
mianfeizhuce.onclick = function () {
    feihuiyuandenglu.style["display"] = "none";
    feihuiyuanzhuce.style["display"] = "block";
}
