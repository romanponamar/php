<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Основы программирования</h1>
	<h2>Переменные</h2>
	<hr>

	
	<?php
		// курс
        $USD = 1000;
        $RUB = $USD * 75.87;
        $CNY = $RUB * 0.09;
        echo "<p>1000 USD =  $RUB RUB</p>";
        echo "<p>$RUB RUB =  $CNY CNY</p>";

	?>
	

</body>
</html>