<html>
<center><h1>CAFE</h1></center>
<?php 
if($_GET['p3']!=''){
	if($_GET['p3']<0.5){
		header('location:p4.php?p1='.$_GET['p1'].'&&p2='.$_GET['p2'].'&&p3='.$_GET['p3'].'');

	}else if($_GET['p3']>=0.5){
		header('location:p5.php?p1='.$_GET['p1'].'&&p2='.$_GET['p2'].'&&p3='.$_GET['p3'].'&&p4=0');
	}
}
?>
<div style="margin-left: 40%;margin-right: 40%;margin-top:3%;width: 200px;height: 200px;border: 1px solid black ;padding:1%;">
<?php
echo 'Apakah Siang Hari ? <br>';
?>
<form href="p4.php" method="get">
	<input type="hidden" name="p1" value="<?=$_GET['p1']?>">
	<input type="hidden" name="p2" value="<?=$_GET['p2']?>">

	<input type="radio" name="p3" value="1">Ya </br> 
	<input type="radio" name="p3" value="0.1">Kurang Tahu  </br>
	<input type="radio" name="p3" value="0.6">Mungkin  </br>
	<input type="radio" name="p3" value="-0.5">Mungkin Tidak </br>
	<input type="radio" name="p3" value="-1">Tidak </br>

	<center><button type="submit">Next</button></center>
</form>
</div>
</html>