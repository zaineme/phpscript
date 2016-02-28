<?php

function containsArray($array) {
	foreach ($array as $row) {
		if (is_array($row)) {
			return true;
		}
	}
}

function getIndexName($list, $given, $key = null) {
	$containsArray = containsArray($list);
	if ($containsArray) {
		$keys = array_keys($list);
		foreach ($keys as $key) {
			$hasIndexName = getIndexName($list[$key], $given, $key);
			if ($hasIndexName) {
				break;
			}
		}
	} else {
		$indexName = array_search($given, $list);
		if ($key && $indexName) {
			echo $key.'<br />';
			return true;
		} else if ($indexName !== false) {
			echo $indexName . '<br />';
		}
		
	}
}
$listOne = array('1', 2, 'hello', 'world');
$listTwo = array('a'=> 'apple', 'b' => 'banana', 'c' => 'cherry');
$listThree = array('flour' => array('baked' => 'cake', 'cooked'), 'sugar' => array( 'burned', 'melted' => 'candy' ) );
getIndexName($listOne, 1); // expected 0
getIndexName($listTwo, 'banana'); // expected b
getIndexName($listThree, 'candy'); // expected 'sugar'
