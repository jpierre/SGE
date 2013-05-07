<?php $this->load->view('home/header');?>
<?php $this->load->view('home/left_side');?>
<link href="<?php echo base_url(); ?>css/wufo/structure.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/form.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/theme.css" rel="stylesheet">

<div class="content">
  <div id="container" class="ltr">
  <br />
  <br />
    <h1>Estos datos han generado tu codigo QR!!</h1>
    <h3>Es necesario que guardes este codigo QR para poder registrar tu asistencia en las ponencias que asistas</h3>
    <br />
    <br />
    <table width="409" height="208" border="0" class="table1">
    <tbody>
      <tr>
        <td width="154"><label>Nombre :</label></td>
        <td width="245"><input id="nom" type="text" value="<?php echo $this->session->userdata('nombres'); ?>" readonly></td>
      </tr>
      <tr>
        <td><label>Apellido Paterno :</label></td>
        <td><input id="apepat" type="text" value="<?php echo $this->session->userdata('apePat'); ?>" readonly/></td>
      </tr>
      <tr>
        <td><label>Apellido Materno :</label></td>
        <td><input id="apemat" type="text" value="<?php echo $this->session->userdata('apeMat'); ?>" readonly /></td>
      </tr>
    
      <tr>
        <td><label>DNI :</label></td>
        <td><input id="dni" type="text" value="<?php echo $this->session->userdata('idDNI'); ?>" readonly/></td>
      </tr>
      <?php if($this->session->userdata('estado')=='1' || $this->session->userdata('estado')=='2'){?> ?>
      
      <tr>
        <td><label>Codigo de alumno :</label></td>
        <td><input id="cod" type="text"  value="<?php echo $this->session->userdata('codigo'); ?>" readonly/></td>
      </tr>
      </tbody>
      <?php } ?>
    </table>
    <div style="display:none" id="output"></div>
    
    
    <canvas id="micanvas"> </canvas>
    <fieldset>
      <legend><b>SELECCIONA EL TIPO DE IMAGEN Y EL RESULTADO SE GENERARA ABAJO<br />
      (Puede guardar la imagen o generar un pdf)</b>
      </legend>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <button class="css3button2" id="png">Generar QR PNG</button>
      
      <button class="css3button2" id="jpeg">Generar QR JPEG</button>
      <?php if($this->session->userdata('estado')=='1' || $this->session->userdata('estado')=='2'){?>
      <a class="css3button" href="javascript:generarPDF()">GENERAR PDF</a>
     
      <?php }else{ ?>
      <a class="css3button" href="javascript:generarPDF2()">GENERAR PDF</a>  <br/>
      <?php } ?>
    </fieldset>
    <br />
    <br />
  <img src="" id="laimagen"/> </div>
  <!--container--> 
  <!-- end .content --></div>
<?php $this->load->view('home/right_side');?>
<?php $this->load->view('home/footer');?>
