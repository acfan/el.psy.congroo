<?php
//var_dump($_FILES);
$f=$_FILES["ff"];

	/*
	foreach ($_FILES["ff"]["error"] as $key) {


		echo $key."<br>";
		# code...
	}
	

echo $_SERVER["HTTP_REFERER"];
echo $_SERVER["HTTP_HOST"];
*/

	$ed=array();
	$na=array();
	for($i=0;$i<count($f["error"]);$i++){
		if(!$f["error"][$i]){
			//echo $f["name"][$i];
			if (preg_match('/image/', $f["type"][$i])) {
			
				$filename=md5_file($f["tmp_name"][$i]);
			//	echo $filename;
				$ex=substr($f["type"][$i], 6);
			//	echo "<br>".$ex;
				$s=move_uploaded_file($f["tmp_name"][$i], "photo/".$filename.".".$ex);
				if($s){
					$url="http://".$_SERVER["HTTP_HOST"]."/tu/photo/".$filename.".".$ex;
					echo "[img]".$url."[/img]";
					echo "<br>";
					$na[]= "<img src=photo/".$filename.".".$ex.">";
					$ed[]=$f["name"][$i]." => ".$url;
				

				}
				
			}
		

		}else{
			echo "ERROR NUMBER ".$f['error'][$i]."Please Try Again!";
			# code...
		}
		}
		echo "<hr>";
		foreach ($na as $key ) {

			echo $key."<br>";
			# code...
		}
		//var_dump($ed);







?>
