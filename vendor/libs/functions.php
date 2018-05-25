<?php 

namespace  vendor\libs;

// Функция для вывода на экран, в приемлимом виде.
function debug($arr) {
	echo "<pre>",print_r($arr, true),"</pre>";
}