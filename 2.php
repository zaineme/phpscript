<?php

function getAsteriskOne($limit = 5) {
	for ($i = 1; $i <= 5; $i++) {
		echo str_repeat('*', $i) . PHP_EOL;
	}

}

function getAsteriskTwo($limit = 4) {
	for ($a = 1; $a <= $limit; $a ++) {
		$asterisks = str_repeat('*', ($a - 1) * 2 + 1);
        $spaces = str_repeat(' ', $limit - $a);
        echo $spaces . $asterisks . PHP_EOL;
	}
}

function getAsteriskThree($limit = 5) {
	for ($i = $limit; $i > 0; $i--) {
		$asteriskMultiplier = $limit - ($i - 1);
		$spaceMultiplier = $i - 1;
		$asterisks = str_repeat('*', $asteriskMultiplier);
		$spaces = str_repeat(' ', $spaceMultiplier);
		echo $spaces . $asterisks . PHP_EOL;	
	}
}

getAsteriskOne();
getAsteriskTwo();
getAsteriskThree();
