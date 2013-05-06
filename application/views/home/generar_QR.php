<?php $this->load->view('home/header');?>
<?php $this->load->view('home/left_side');?>
<link href="<?php echo base_url(); ?>css/wufo/structure.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/form.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/theme.css" rel="stylesheet">

<div class="content">
  <div id="container" class="ltr">
  <h1>Estos datos han generado tu codigo QR!!</h1>
  <h3>Es necesario que guardes este codigo QR para poder registrar tu asistencia en las ponencias que asistas</h3>
  <table width="336" border="1">
                <tr>
                  <td>Nombre</td>
                  <td><input id="nom" type="text" value="<?php echo $this->session->userdata('nombres'); ?>" readonly></td>
                </tr>
                <tr>
                  <td>Apellido Paterno</td>
                  <td><input id="apepat" type="text" value="<?php echo $this->session->userdata('apePat'); ?>" readonly/></td>
                </tr>
                <tr>
                  <td>Apellido Materno</td>
                  <td><input id="apemat" type="text" value="<?php echo $this->session->userdata('apeMat'); ?>" readonly /></td>
                </tr>
                <tr>
                  <td>DNI</td>
                  <td><input id="dni" type="text" value="<?php echo $this->session->userdata('idDNI'); ?>" readonly/></td>
                </tr>
                <?php if($this->session->userdata('estado')=='1' || $this->session->userdata('estado')=='2'):?>
                <tr>
                  <td>Codigo de alumno</td>
                  <td><input id="cod" type="text"  value="<?php echo $this->session->userdata('codigo'); ?>" readonly/></td>
                </tr>
                <?php endif ?>
              </table>
  
  <div style="display:none" id="output"></div>
<canvas id="micanvas"> </canvas>
<fieldset>
  <legend>Pulsa sobre el tipo de imagen y el resultado se generar&aacute; abajo</legend>
  <button id="png">Generar PNG</button>
  |
  <button id="jpeg">Generar JPEG</button>

  <a href="javascript:generarPDF()">Generar PDF</a>
  <br/>
</fieldset>
<img src="" id="laimagen"/> 
  
  </div>
  <!--container--> 
  <!-- end .content --></div>
  
  
  
  
<?php $this->load->view('home/right_side');?>
<?php $this->load->view('home/footer');?>

