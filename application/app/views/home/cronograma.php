<script type="text/javascript">
	function onSelect(e) {
                    i++;
                    var spn = document.createElement('a');
                    spn.innerHTML = $(e.item).children(".k-link").text();
                    spn.href = "#";
                    spn.className = 'opciones' + i;
                    document.getElementById('content').appendChild(spn);
                }
</script>
<?php $this->load->view('home/header');?>
<?php $this->load->view('home/left_side');?>
<link href="<?php echo base_url(); ?>css/wufo/structure.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/form.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/theme.css" rel="stylesheet">

<div class="content">
  <div id="container" class="ltr">
  <br />
  <br />
    <h1>Horarios Evento : <?php if($ponencias != NULL){ echo $ponencias[0]->nom_eve;}else{ echo "No hay ponencias";} ?></h1>
	<form name="generar" action="<?php echo base_url();?>inscripcion/c_inscripcion/mostrarCronograma/" method="post">
    
	</form>
    <br />
    <br />
    
    <div style="display:none" id="output"></div>
    
    
    <canvas id="micanvas"> </canvas>
    <fieldset>
      
    </fieldset>
    <br />
    <br />
  <img src="" id="laimagen"/> </div>
  <!--container--> 
  <!-- end .content --></div>
<?php $this->load->view('home/right_side');?>
<?php $this->load->view('home/footer');?>
