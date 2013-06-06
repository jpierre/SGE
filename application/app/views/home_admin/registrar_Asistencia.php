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
<?php $this->load->view('home_admin/header');?>
<?php $this->load->view('home_admin/left_side');?>
<link href="<?php echo base_url(); ?>css/wufo/structure.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/form.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/theme.css" rel="stylesheet">

<div class="content">
  <div id="container" class="ltr">
  <br />
  <br />
    
    <label class="desc" id="title20" for="Field20"> Seleccionar una opcion <span id="req_20" class="req">*</span></label>
			<div>
				<select name="id_eve" class="field select medium">
					<?php for($i=0; $i<count($ponencias); $i++){?>
						<option value="<?=$ponencias[$i]->id_eve?>"><?=$ponencias[$i]->nom_pon?></option>
					<?php }?>
				</select>
			</div>
    
    <a href="<?php echo base_url(); ?>administracion/c_administracion/cargarCamara/">Click</a>
    <fieldset>
      
    </fieldset>
    <br />
    <br />
  <img src="" id="laimagen"/> </div>
  <!--container--> 
  <!-- end .content --></div>
<?php $this->load->view('home_admin/right_side');?>
<?php $this->load->view('home_admin/footer');?>
