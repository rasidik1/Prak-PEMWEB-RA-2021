<?php
		function srt_data($data){
			$jumlah = count($data);

			for($i=1; $i < $jumlah; $i++){
				for($j=0; $j < $jumlah-$i; $j++){
					if( $data[$j] > $data[$j+1]){
						$temp = $data[$j];
						$data[$j] = $data[$j+1];
						$data[$j+1] = $temp;
					}
				}
			}

			return $data;
		}

		
		function tampil_data($data){
			$jumlah = count($data);
			
			for($i=0; $i<$jumlah; $i++){
				echo "$data[$i] ";
				if($i !=$jumlah-1){
					echo "- ";
				}
			}
			echo "</p>";
		}

		
		$data = array('larine', 'aduh', 'qifuat', 'toda', 'anevi', 'samid', 'kifuat');
		
		
		echo "<p>Data sebelum diurutkan : <br>";
		tampil_data($data);

		
		echo "<p>Data Setelah diurutkan : <br>";
		$data = srt_data($data);
		tampil_data($data);

?>