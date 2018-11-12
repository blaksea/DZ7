<html> 
 <head> 
  <title>Калькулятор</title> 
 </head> 
 <body> 
<?php
$a = $_POST['vala'];
$b = $_POST['valb'];
//$res = 0;
if($_POST['button']) {
	if ($_POST['oper'] == "+"){
	$res = $a+$b;
	}
	elseif ($_POST['oper'] == "-"){
	$res = $a-$b;
	}
	elseif ($_POST['oper'] == "*"){
	$res = $a*$b;
	}
	elseif ($_POST['oper'] == "/"){
		if($b==0){
		$res = "На ноль делить нельзя";}
		else 
	$res = $a/$b;
	}
}

if($_POST['buttonsum']) {
	$res = $a+$b;
}

if($_POST['buttondif']) {
	$res = $a-$b;
	}


if($_POST['buttonmult']) {
	$res = $a*$b;
	}

if($_POST['buttondiv']) {
		if($b==0){
		$res = "На ноль делить нельзя";}
		else 
		$res = $a/$b;
	}

	?>

<form action="calc.php" method="post" style="margin:100;">
<input type="text" name="vala" style="width:50px;">
<select name="oper">
	<option value="+">+</option>
	<option value="-">-</option>
	<option value="*">*</option>
	<option value="/">/</option>
</select>
<input type="text"  name="valb" style="width:50px;">
<input type="submit" value="Равно" name="button">
<span><?=$res?></span><br><br>
А можно считать и кнопками:<br>
<input type="submit" value="+" name="buttonsum" style="width:50px;"><input type="submit" value="-" name="buttondif" style="width:50px;"><input type="submit" value="*" name="buttonmult" style="width:50px;"><input type="submit" value="/" name="buttondiv" style="width:50px;">
</form>
</body>
</html>
