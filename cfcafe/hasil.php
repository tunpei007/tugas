<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
	include('cfcafe.php');
	$cf = new cafe();?>
</head>
<body>
<center><h1>CAFE</h1></center>
<div style="margin-left: 40%;margin-right: 40%;margin-top:3%;">

		hasil p1 = <?=$_GET['p1']?> <br>
		hasil p2 = <?=$_GET['p2']?> <br>
		hasil p3 = <?=$_GET['p3']?> <br>
		hasil p4 = <?=$_GET['p4']?> <br>
		hasil p5 = <?=$_GET['p5']?> <br>
		hasil p6 = <?=$_GET['p6']?> <br>
		hasil p7 = <?=$_GET['p7']?> <br>
		hasil p8 = <?=$_GET['p8']?> <br>

		<?php

		$biasa = $_GET['p1'];
		$pagi = $_GET['p2'] ;
		$siang = $_GET['p3'];
		$malam = $_GET['p4'];
		$dekatweekend = $_GET['p5'];
		$weekend = $_GET['p6'];
		$senin = $_GET['p7'];
		$lebaran = $_GET['p8'];

		if($pagi>=0.5){

		}

		$r1 = $cf->r1($biasa);
		$r5 = $cf->r5($dekatweekend);
		$r2 = $cf->r2($pagi,$biasa);
		$r3 = $cf->r3($siang,$biasa);
		$r4 = $cf->r4($malam,$biasa);
		$r6 = $cf->r6($pagi,$dekatweekend);
		$r7 = $cf->r7($siang,$dekatweekend);
		$r8 = $cf->r8($malam,$dekatweekend);
		$r9 = $cf->r9($weekend);
		$r10 = $cf->r10($pagi, $weekend);
		$r11 = $cf->r11($siang, $weekend);
		$r12 = $cf->r12($malam, $weekend);
		$r13 = $cf->r13($senin);
		$r14 = $cf->r14($lebaran);
		$r15 = $cf->r15($pagi, $lebaran);
		$r16 = $cf->r16($siang, $lebaran);
		$r17 = $cf->r17($malam, $lebaran);
		
		if($pagi>=0.5){
			echo '<br>';
			echo "Penghitungan : ";
			echo '<br>';
			echo 'CF cafe Ramai : '. $a = $cf->cframaipagi($r5,$r6,$r14); 
			echo '<br>';
			echo 'CF cafe Sepi : '.  $b = $cf->cfsepipagi($r1,$r2,$r9,$r10,$r13,$r15); 
			
			echo '<br>';
			echo '<br>';
			echo "Hasilnya : ";
			echo "<b>";
			if($a > $b){
				echo 'cafe ramai dikunjungi orang';
			}else{
				echo 'Pengunjung cafe sepi ';
			}
			echo "</b>";
		} else if($pagi<0.5){
			echo '<br>';
			echo "Penghitungan : ";
			echo '<br>';
			echo 'CF cafe Ramai : '. $a = $cf->cframaisiang($r3,$r5,$r6,$r7,$r14,$r16); 
			echo '<br>';
			echo 'CF cafe Sepi : '.  $b = $cf->cfsepisiang($r1,$r2,$r9,$r10,$r11,$r13,$r15); 
			
			echo '<br>';
			echo '<br>';
			echo "Hasilnya : ";
			echo "<b>";
				if($a > $b){
					echo 'cafe ramai dikunjungi orang';
				}else{
					echo 'Pengunjung cafe sepi ';
				}
				echo "</b>";
			} else if($pagi<0.5 && $siang<0.5){
				echo '<br>';
				echo "Penghitungan : ";
			echo '<br>';
			echo 'CF cafe Ramai : '. $a = $cf->cframai($r3,$r4,$r5,$r6,$r7,$r8,$r14,$r16,$r17); 
			echo '<br>';
			echo 'CF cafe Sepi : '.  $b = $cf->cfsepi($r1,$r2,$r9,$r10,$r11,$r12,$r13,$r15); 
			
			echo '<br>';
			echo '<br>';
			echo "Hasilnya : ";
			echo "<b>";
				if($a > $b){
					echo 'cafe ramai dikunjungi orang';
				}else{
					echo 'Pengunjung cafe sepi ';
				}
				echo "</b>";
			}
		?>
		</div>
</body>
</html>