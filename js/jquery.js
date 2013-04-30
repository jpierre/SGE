jQuery(function(){
	
	
	var nombre = $("#nom").val();
	var apepat=$("#apepat").val();
	var apemat=$("#apemat").val();
	var dni=$("#dni").val();
	var cod=$("#cod").val();
	jQuery('#output').qrcode(nombre+" "+apepat+" "+apemat+" "+dni+" "+cod);
})

var canvas = document.getElementById("micanvas");


var img = document.getElementById("laimagen");

var png = document.getElementById("png");
png.addEventListener("click",function(){        
        img.src = canvas.toDataURL("image/png");        
},false);



var jpeg = document.getElementById("jpeg");
jpeg.addEventListener("click",function(){
        img.src = canvas.toDataURL("image/jpeg");
},false);