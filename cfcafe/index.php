<html>
<center><h1>CAFE</h1></center>
<div style="margin-left: 40%;margin-right: 40%;margin-top:3%;width: 200px;height: 200px;border: 1px solid black ;padding:1%;">
	<?php 
		echo 'Apakah hari kerja ? <br>';
	?>
	
	<form action="p2.php" method="get" >
					<input type="radio" name="p1" value="1">Ya </br>
					<input type="radio" name="p1" value="0.1">Kurang Tahu </br>
					<input type="radio" name="p1" value="0.6">Mungkin </br>
					<input type="radio" name="p1" value="-0.5">Mungkin Tidak </br>
					<input type="radio" name="p1" value="-1">Tidak </br>
					<input type="hidden" name="p2" value=""> </br>
		<center><button type="submit">Next</button></center>
	</form>
	</div>
</html>