<html>
<center><h1>CAFE</h1></center>
<div style="margin-left: 40%;margin-right: 40%;margin-top:3%;width: 200px;height: 200px;border: 1px solid black ;padding:1%;">
<?php
echo 'Apakah Mendekati weekend ? <br>';
?>
<form action="p6.php" method="get">
	<?php
		if ($_GET['p3'] == NULL && $_GET['p4'] == NULL) {?>
			<input type="hidden" name="p1" value="<?=$_GET['p1']?>">
			<input type="hidden" name="p2" value="<?=$_GET['p2']?>">
			<input type="hidden" name="p3" value="<?=$_GET['p3']?>">
			<input type="hidden" name="p4" value="<?=$_GET['p4']?>">
	    	<?php } elseif ($_GET['p4'] == NULL) {?>
			<input type="hidden" name="p1" value="<?=$_GET['p1']?>">
			<input type="hidden" name="p2" value="<?=$_GET['p2']?>">
			<input type="hidden" name="p3" value="<?=$_GET['p3']?>">
			<input type="hidden" name="p4" value="<?=$_GET['p4']?>">
		<?php } else { ?>
			<input type="hidden" name="p1" value="<?=$_GET['p1']?>">
			<input type="hidden" name="p2" value="<?=$_GET['p2']?>">
			<input type="hidden" name="p3" value="<?=$_GET['p3']?>">
			<input type="hidden" name="p4" value="<?=$_GET['p4']?>">
		<?php }
	?>
	
	<input type="radio" name="p5" value="1">Ya </br>
	<input type="radio" name="p5" value="0.1">Kurang Tahu  </br>
	<input type="radio" name="p5" value="0.6">Mungkin  </br>
	<input type="radio" name="p5" value="-0.5">Mungkin Tidak </br>
	<input type="radio" name="p5" value="-1">Tidak </br>
<center><button type="submit">Next</button></center>
</form>
</div>
</html>