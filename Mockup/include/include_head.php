<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
<?php $dir='/home/content/42/10705742/html/test/'; 
			$files1 = scandir($dir); 
			$singleString = implode(' | ',$files1);?>
var files ="<?php print_r($singleString)?>";
</script>
<script language="javascript" type="text/javascript" src="../assets/scripts/cmd_line_javascript.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/css/cmd_line_style.css">