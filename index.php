<html> 
 <head> 
  <title>Отзывы</title> 
 </head> 
 <body> 
<?php
require_once 'config.php';
$firstname = $_POST['firstname'];
$textreview = $_POST['textreview'];
$x = rand(0,10);
$y = rand(0,10);
$cap = $x+$y;

//Вывожу отзывы
$select= mysqli_query($link, "SELECT id, name, textrev FROM review;");
while ($result= mysqli_fetch_array($select)) {
	echo "Имя: <i>".$result['name'] ."</i><br>";
	echo "Отзыв: ".$result['textrev'] . "<br><br>";
}

	
//Записываю новые отзывы	

if (isset($_POST['firstname']) && isset($_POST['textreview'])){
	if($_POST['answer'] == $_POST['cap']){
		$result = $link->query("INSERT INTO ".$db_table." (name,textrev) VALUES ('$firstname','$textreview')");
		if ($result == true){
			echo "Информация занесена в базу данных";
		}else{
			echo "Информация не занесена в базу данных";
		}
	}
	else $res = "Неправильно введено проверочное значение";
}

?>

<form action="index.php" method="post">
Имя*:   <input type="text" name="firstname" style="width:200px;" required><br>
Отзыв*: <textarea rows="10" cols="45" name="textreview" style="width:200px;" required></textarea>
<input type="hidden" value="<?=$cap?>" name="cap">
<p>Введите значение: <?=$x?>+<?=$y?>=<input style='width:20px' type="text" name="answer" ></p>
<input type="submit" value="Отправить" name="button">
<p><?=$res?></p>
</form>
</body>
</html>
