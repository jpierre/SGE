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
	<table>
		
		<?php for($i=0; $i<count($ponencias); $i++){ ?>
		<tr>
			<td><?php echo $ponencias[$i]->nom_pon ?></td>
			<td><?php if($ponencias[$i]->tip_amb == '1'){echo "conferencia";}else{echo "taller";} ?></td>
			<td><?php echo $ponencias[$i]->cod_fia_amb; ?></td>
			<td><?php echo $ponencias[$i]->ape_pat_exp." ".$ponencias[$i]->ape_mat_exp.", ".$ponencias[$i]->nom_exp ?></td>
			<td><?php echo $ponencias[$i]->fech_ini_pon ?></td>
		</tr>
		<?php } ?>
		
	
	</table>
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
