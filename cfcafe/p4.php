<html>
<center><h1>CAFE</h1></center>
<?php 
if($_GET['p4']!='');
{
	if($_GET['p4']<0.5){
		header('location:p5.php?p1='.$_GET['p1'].'&&p2='.$_GET['p2'].'&&p3='.$_GET['p3'].$_GET['p4'].'');

	}else if($_GET['p4']>=0.5){
		header('location:p5.php?p1='.$_GET['p1'].'&&p2='.$_GET['p2'].'&&p3='.$_GET['p3'].$_GET['p4']. '&&p5=0');
	}
}
?>
<div style="margin-left: 40%;margin-right: 40%;margin-top:3%;width: 200px;height: 200px;border: 1px solid black ;padding:1%;">
<?php
echo 'Apakah malam Hari ? <br>';
?>
<form action="p5.php" method="get">
	<input type="hidden" name="p1" value="<?=$_GET['p1']?>">
	<input type="hidden" name="p2" value="<?=$_GET['p2']?>">
	<input type="hidden" name="p3" value="<?=$_GET['p3']?>">

	<input type="radio" name="p4" value="1">Ya </br>
	<input type="radio" name="p4" value="0.1">Kurang Tahu  </br>
	<input type="radio" name="p4" value="0.6">Mungkin  </br>
	<input type="radio" name="p4" value="-0.5">Mungkin Tidak </br>
	<input type="radio" name="p4" value="-1">Tidak </br>

<center><button type="submit">Next</button></center>
</form>
</div>
</html>