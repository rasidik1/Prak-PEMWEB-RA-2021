<?php 
		function bilangan_prima($data){
			for($a=1; $a<=$data; $a++){
				$test = true;

				if($a == 2){
					echo " $a ";
				}else if($a != 1){
					$limit = ($a-1);
					for($j=2; $j<$limit; $j++){
						if($a%$j == 0){
							$test = false;
							break;
						}
					}
					if($test == true){
						echo " , $a ";
					}
				}
			}
		}

		echo "<p> Bilangan prima dari 1 sampai 50 : ";
		echo "<br></br>";
		bilangan_prima(50);
?>