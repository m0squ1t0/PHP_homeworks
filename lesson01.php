<?php
    $a = 5;
    $b = '05';

    var_dump($a == $b);         // Почему true?
	// var_dump выводит тип переменной. В данном случае использовано сравнение переменных без учета проверки типа, 
	// программа привела строчню переменную к типу целочисленному типу, и сравнила два числа 5. Поэтому вернулось значение True
    
	var_dump((int)'012345');     // Почему 12345?
    // программа привела строку к типу целочисленному типу, целые числа с 0 не начинаются
	
	var_dump((float)123.0 === (int)123.0); // Почему false?
	 // программа тождественно сравнивает значения и типы данных, в данном случае типы данных заданы различные.
    
	var_dump((int)0 === (int)'hello, world'); // Почему true?
	// программа сравнивает данные типа int, в данном случае правая часть сравнения получает значение 0, тк происходит преобразование строки в целочисленный тип данных без цифр в значении строки. 
	
	// Смена местами значений переменную
	$a = 10;
  $b = 20;
	$a = $a + $b;
	$b = $a - $b;
	$a = $a - $b;
	
	echo "$a, $b";
	
?>
