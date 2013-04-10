<!DOCTYPE html>
<html>
<head>

<title>
Generar Lista de Requerimientos
</title>

<!-- Meta Tags -->
<meta charset="utf-8">


<!-- CSS -->
<link href="../css/structure.css" rel="stylesheet">
<link href="../css/form.css" rel="stylesheet">
<link href="../css/theme.css" rel="stylesheet">

<!-- JavaScript -->
<script src="scripts/wufoo.js"></script>
<script type='text/javascript' src='../js/mostrar.js'></script>

<!--[if lt IE 10]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body id="public">
<div id="container" class="ltr">

<form id="form1" name="form1" class="wufoo rightLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
action="https://piegge.wufoo.com.mx/forms/z7x3x5/#public">

<header id="header" class="info">
<h2>Generar Lista de Requerimientos</h2>
<div>Primero busque los productos con poco stock en almacén y seleccionelos para luego crear la Lista de Requerimientos</div>
</header>

<ul>
<li >
   <input type="button" onClick="mostrar_ocultar('oculta1')" value="Mostrar Productos con poco Stock"
 />
</li>
<li id="foli280" class="notranslate section "></li><div id="oculta1"><li id="foli284" class="likert notranslate 
col5
 ">
<table cellspacing="0">
<caption id="title284">
Productos Encontrados
</caption>
<thead>
<tr>
<td><strong>Codigo</strong></td>
<td ><strong>Nombre del Producto</strong></td>
<td ><strong>Cantidad</strong></td>
<td ><strong>Marca</strong></td>
<td ><strong>Descripción del Producto</strong></td>
<td ><strong>Seleccion</strong></td>
</tr>
</thead>
<tbody>
<tr class="statement284">
<td >ART00068</td>
<td >Corrector T/Lapicero </td>
<td >28</td>
<td >Artesco</td>
<td >Corrector para boligrafos tinta liquida y seca.</td>
<td ><input type="checkbox"></td>
</tr>
<tr class="alt statement285">
<td >ART00115</td>
<td >Tinta p/ tampon AZUL</td>
<td >24</td>
<td >Artesco</td>
<td >Tinta p/ utilizar sobre tampon y tampon mini.</td>
<td ><input type="checkbox"></td>
</tr>
<tr class="statement286">
<td >ART00269</td>
<td >Sacagrapas MINI</td>
<td >18</td>
<td >Artesco</td>
<td >Sin descripción</td>
<td ><input type="checkbox"></td>
</tr>
<tr class="statement287">
<td >FAB00164</td>
<td >Plumones 045 X12UND</td>
<td >24</td>
<td >Faber Castell</td>
<td >Sin descripción</td>
<td ><input type="checkbox"></td>
</tr>
<tr class="statement288">
<td >FAB00166</td>
<td >Plumones 045 X20UND</td>
<td >36</td>
<td >Faber Castell</td>
<td >Sin descripción</td>
<td ><input type="checkbox"></td>
</tr>
</tbody>
</table>
</li>
<li > <input type="button" value="Agrega a Lista de Requerimientos" onClick="location.href='lista_req2.html'" class="btTxt submit" 
    />
</li>
<li id="foli457" class="notranslate section      ">
<section>
<h3 id="title457" style="color:#F00;">
NOTA: Se deben seleccionar productos de una misma Marca (Proveedor).
</h3>
</section>
</li>
</div>
</ul>
</form> 

</div><!--container-->
</body>
</html>