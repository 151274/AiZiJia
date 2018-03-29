
// span的点击事件
var pic = document.querySelector('.container>.pic');
var shaizhaopian=document.querySelector('.shaizhaopian');
var input_file=document.querySelector('.input_file');
var pic_width=pic.offsetWidth+5;
console.log(pic,pic_width);
// 处理input点击之后的change事件
document.getElementById("photo").addEventListener("change",function(e){
    var files =this.files;
    var reader =new FileReader();
    reader.readAsDataURL(files[0]);
    reader.onload =function(e){
        var dx =(e.total/1024)/1024;
        if(dx>=2){
            alert("文件大小大于2M");
            return;
        }
        var result =this.result;//这里就是转化之后的DataURL

        // //创建img
        pic_width += isNaN(pic.style.width) + 85;
        console.log(pic_width);
        pic.style.width = pic_width+"px";
        console.log(pic.style.width);
        var oDiv = document.createElement("img");
        oDiv.src = result;
        pic.appendChild(oDiv);



        if(pic.innerHTML){
            // alert(pic.innerHTML);
            shaizhaopian.style.display="none";
        }

        //照片数
        var zhaopianshu_num=pic.getElementsByTagName('img').length;
        console.log(zhaopianshu_num);
        var zhaopianshu=document.querySelector('.zhaopianshu>span');
            zhaopianshu.innerHTML = zhaopianshu_num;

        if(zhaopianshu_num==5){
            input_file.style.display = "none";
        }
    }
    console.log(pic_width);
});
