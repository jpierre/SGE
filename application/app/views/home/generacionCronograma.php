<?php $this->load->view('home/header');?>
<?php $this->load->view('home/left_side');?>
<link href="<?php echo base_url(); ?>css/wufo/structure.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/form.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/theme.css" rel="stylesheet">

<div class="content">
  <div id="container" class="ltr">
  <br />
  <br />
    <h1>Horarios</h1>
    <p>Eliga evento: <select id="evento" name="evento">
		<option>-------Seleccione-------</option>
		<?php for($i=0; $i<count($eventos); $i++): ?>
		<option value="<?php echo $i+1; ?>"><?php echo $eventos[$i]->nom_eve; ?></option>
		<?php endfor?>
	</select></p>
	
		<?php /* $max=0;
		 for($i=0; $i<count($eventos); $i++){
					if($eventos[$i]>$eventos[$i+1]){
						$max=$eventos[$i];
					}else{
						$max=$eventos[$+1];
					}
		}
		 */?>
		<p>Eliga Dia del Evento: <select id="dia">
		<?php /* for($i=0; $i<$max; $i++): ?>
		<option value="<?php echo $i+1; ?>"><?php echo $i+1; */?></option>
		<?php /* endfor? */?>
	
	</select></p>
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
