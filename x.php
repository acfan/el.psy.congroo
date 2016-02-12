<?php
	$dir=scandir('photo');
	//var_dump($dir);
	for ($i=2; $i < count($dir); $i++) { 
		?>
			<img src=<?php echo "http://el.psy.congroo.com/tu/photo/".$dir[$i].">" ?>
		<?php
		# code...
	}

?>

