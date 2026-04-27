<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

	<h1>Основы программирования</h1>
	<h2>Типы данных</h2>
	<hr>
	<h2>Слабая типизация</h2>
	
	<?php
		echo '1) ', 11 + '7', '<br />'; //18
        echo '2) ', '2' + '5', '<br />'; //7
        echo '3) ', 2 + '7 abc', '<br />'; //Warning: A non-numeric value encountered in
        //echo '4) ', 2 + 'abc7', '<br />'; //Fatal error: Uncaught TypeError: Unsupported operand types: int + string in
        echo '5) ', 1 + true + null, '<br />'; //2
        echo '6) ', 1 + (int)'abc7', '<br />'; //1
        echo '7) ', 2 * '7abc', '<br />'; //Warning: A non-numeric value encountered in
        echo '8) ', true + false + true + true, '<br />'; //3
        echo '9) ', '8' / '2' - 'null', '<br />'; //Fatal error: Uncaught TypeError: Unsupported operand types: int - string in
        //echo '10) ', '4.5px' – 3, '<br />'; //Parse error: syntax error, unexpected identifier "–", expecting "," or ";" in

	?>
	

</body>
</html>