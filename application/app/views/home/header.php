<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/css.css" type="text/css" media="screen" charset="utf-8" />
<script type='text/javascript' src="<?php echo base_url(); ?>js/funciones.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/base64.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/sprintf.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jspdf.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jspdf.plugin.addimage.js"></script>
<title>Untitled Document</title>
<script type="text/javascript">

function generarPDF() {
	
	var nombre=document.getElementById('nom').value;
	var apepat=document.getElementById('apepat').value;
	var apemat=document.getElementById('apemat').value;
	var dni=document.getElementById('dni').value;
	var cod=document.getElementById('cod').value;
	var imagen=document.getElementById("laimagen");
	var logo='data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAeAB4AAD/4RCURXhpZgAATU0AKgAAAAgABAE7AAIAAAALAAAISodpAAQAAAABAAAIVpydAAEAAAAWAAAQduocAAcAAAgMAAAAPgAAAAAc6gAAAAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEJhcmkgRGF2aWQAAAAB6hwABwAACAwAAAhoAAAAABzqAAAACAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABCAGEAcgBpACAARABhAHYAaQBkAAAA/+EKY2h0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8APD94cGFja2V0IGJlZ2luPSfvu78nIGlkPSdXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQnPz4NCjx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iPjxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+PHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9InV1aWQ6ZmFmNWJkZDUtYmEzZC0xMWRhLWFkMzEtZDMzZDc1MTgyZjFiIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iLz48cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0idXVpZDpmYWY1YmRkNS1iYTNkLTExZGEtYWQzMS1kMzNkNzUxODJmMWIiIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyI+PGRjOmNyZWF0b3I+PHJkZjpTZXEgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj48cmRmOmxpPkJhcmkgRGF2aWQ8L3JkZjpsaT48L3JkZjpTZXE+DQoJCQk8L2RjOmNyZWF0b3I+PC9yZGY6RGVzY3JpcHRpb24+PC9yZGY6UkRGPjwveDp4bXBtZXRhPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8P3hwYWNrZXQgZW5kPSd3Jz8+/9sAQwAHBQUGBQQHBgUGCAcHCAoRCwoJCQoVDxAMERgVGhkYFRgXGx4nIRsdJR0XGCIuIiUoKSssKxogLzMvKjInKisq/9sAQwEHCAgKCQoUCwsUKhwYHCoqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioq/8AAEQgAbAEtAwEiAAIRAQMRAf/EAB8AAAEFAQEBAQEBAAAAAAAAAAABAgMEBQYHCAkKC//EALUQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZH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'
	
	

	var doc = new jsPDF();
    doc.setFontSize(15);
	doc.setFont("times");
	
	
	doc.rect(10, 10, 190, 200); 
	doc.addImage(logo,'JPEG',10,5,60,20)
	doc.text(50,50, 'FACULTA DE INGENIERIA Y ARQUITECTURA');
	doc.rect(18, 65, 100, 40); 
	doc.text(20, 70, 'Nombre (S) :' + "  "+ nombre);
	doc.text(20, 80, 'Apellido (S) : ' + "  " + apepat + "  " +apemat);
	doc.text(20, 90, 'DNI :' + " "+ dni);
	doc.text(20,100, 'Codigo :' + " "+ cod);
	doc.addImage(imagen,'JPEG', 80, 120, 50, 50);
	
	// Output as Data URI
	doc.output('datauri');
	
}
function generarPDF2(){
	var nombre=document.getElementById('nom').value;
	var apepat=document.getElementById('apepat').value;
	var apemat=document.getElementById('apemat').value;
	var dni=document.getElementById('dni').value;
	//var cod=document.getElementById('cod').value;
	var imagen=document.getElementById("laimagen");
	
	var logo='data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAeAB4AAD/4RCURXhpZgAATU0AKgAAAAgABAE7AAIAAAALAAAISodpAAQAAAABAAAIVpydAAEAAAAWAAAQduocAAcAAAgMAAAAPgAAAAAc6gAAAAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEJhcmkgRGF2aWQAAAAB6hwABwAACAwAAAhoAAAAABzqAAAACAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABCAGEAcgBpACAARABhAHYAaQBkAAAA/+EKY2h0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8APD94cGFja2V0IGJlZ2luPSfvu78nIGlkPSdXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQnPz4NCjx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iPjxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+PHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9InV1aWQ6ZmFmNWJkZDUtYmEzZC0xMWRhLWFkMzEtZDMzZDc1MTgyZjFiIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iLz48cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0idXVpZDpmYWY1YmRkNS1iYTNkLTExZGEtYWQzMS1kMzNkNzUxODJmMWIiIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyI+PGRjOmNyZWF0b3I+PHJkZjpTZXEgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj48cmRmOmxpPkJhcmkgRGF2aWQ8L3JkZjpsaT48L3JkZjpTZXE+DQoJCQk8L2RjOmNyZWF0b3I+PC9yZGY6RGVzY3JpcHRpb24+PC9yZGY6UkRGPjwveDp4bXBtZXRhPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8P3hwYWNrZXQgZW5kPSd3Jz8+/9sAQwAHBQUGBQQHBgUGCAcHCAoRCwoJCQoVDxAMERgVGhkYFRgXGx4nIRsdJR0XGCIuIiUoKSssKxogLzMvKjInKisq/9sAQwEHCAgKCQoUCwsUKhwYHCoqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioq/8AAEQgAbAEtAwEiAAIRAQMRAf/EAB8AAAEFAQEBAQEBAAAAAAAAAAABAgMEBQYHCAkKC//EALUQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZH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'
	

	var doc = new jsPDF();
    doc.setFontSize(15);
	doc.setFont("times");
	
doc.rect(10, 10, 190, 200); 
	doc.addImage(logo,'JPEG',10,5,60,20)
	doc.text(50,50, 'FACULTA DE INGENIERIA Y ARQUITECTURA');
	doc.rect(18, 65, 100, 40); 
	doc.text(20, 70, 'Nombre (S) :' + "  "+ nombre);
	doc.text(20, 80, 'Apellido (S) : ' + "  " + apepat + "  " +apemat);
	doc.text(20, 90, 'DNI :' + " "+ dni);
	//doc.text(20,100, 'Codigo :' + " "+ cod);
	doc.addImage(imagen,'JPEG', 80, 120, 50, 50);
	
	// Output as Data URI
	doc.output('datauri');
	
}

</script>
<style>
.content {
	margin-right: -1px;
} /* this 1px negative margin can be placed on any of the columns in this layout with the same corrective effect. */
ul.nav a {
	zoom: 1;
}  /* the zoom property gives IE the hasLayout trigger it needs to correct extra whiltespace between the links */
</style>
<![endif]-->
</head>

<body onload="init()">
<div class="container">
<div class="header"><img src="<?php echo base_url(); ?>images/cabecera.png" width="1000" height="144" border="0"/> 
  <!-- end .header --></div>
