<?php
foreach($css_files as $file): ?>
<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

<div class="content">


<?php echo $output; ?>


<div id="container" class="ltr">



			
			</div><!--container-->
<!-- end .content --></div>