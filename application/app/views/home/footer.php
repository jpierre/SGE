	 <div class="footer">
	   <img src="<?php echo base_url(); ?>images/pie.png" style="position:absolute; left:0px;" width="1000" height="72"/>
	 </div>
<!-- end .container --></div>

 <script type='text/javascript' src='<?php echo base_url(); ?>js/jquery-1.7.2.min.js'></script>
<script type='text/javascript' src="<?php echo base_url(); ?>js/script.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.qrcode.js"></script> 
<script type='text/javascript' src="<?php echo base_url(); ?>js/qrcode.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.js"></script>  
<script>



jQuery(function(){
	
	
	var nombre = $("#nom").val();
	var apepat=$("#apepat").val();
	var apemat=$("#apemat").val();
	var dni=$("#dni").val();
	var cod=$("#cod").val();
	jQuery('#output').qrcode(nombre+" "+apepat+" "+apemat+"%&"+dni+"%&"+cod);
})
</script> 
<script>

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


</script>
</body>
</html>