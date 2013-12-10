<script>
<?php
        
    	$dir    = '../../Sites/';
		$files1 = scandir($dir);
        $singleString = implode(' | ',$files1);
?>
var files ="<?php print_r($singleString)?>";
</script>
<script language="javascript" type="text/javascript" src="http://nova.it.rit.edu/~theUnixRebels/assets/scripts/cmd_line_javascript.js"></script>
<link rel="stylesheet" type="text/css" href="http://nova.it.rit.edu/~theUnixRebels/assets/css/cmd_line_style.css">