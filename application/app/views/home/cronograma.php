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
    <h1>Cronograma de Ponencias : <?php if($ponencias != NULL){ echo $ponencias[0]->nom_eve;}else{ echo "No hay ponencias";} ?></h1>
    <br>
    <div id="foli284" class="likert notranslatec col5">
	<table>
		<thead>
			<tr>
				<td><strong>Nombre de Ponencia</strong></td>
				<td><strong>Tipo Ponencia</strong></td>
				<td><strong>Ambiente</strong></td>
				<td><strong>Expositor</strong></td>
				<td><strong>Fecha de ponencia</strong></td>
			</tr>
		</thead>
		<tbody>
		<?php for($i=0; $i<count($ponencias); $i++){ ?>
		<tr>
			<td><?php echo $ponencias[$i]->nom_pon ?></td>
			<td><?php if($ponencias[$i]->tip_amb == '1'){echo "Conferencia";}else{echo "Taller";} ?></td>
			<td><?php echo $ponencias[$i]->cod_fia_amb; ?></td>
			<td><?php echo $ponencias[$i]->ape_pat_exp." ".$ponencias[$i]->ape_mat_exp.", ".$ponencias[$i]->nom_exp ?></td>
			<td><?php echo $ponencias[$i]->fech_ini_pon ?></td>
		</tr>
		<?php } ?>
		</tbody>
	
	</table>
	</div>
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
