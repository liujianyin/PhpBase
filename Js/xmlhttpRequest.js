// var xhr=new XMLHttpRequest();
var request;
if(window.XMLHttpRequest){
    request=new XMLHttpRequest(); //IE7,Firefox
}else {
    request=new ActiveXObject("Microsoft.XMLHTTP"); //IE6,IE5 兼容性问题
}