<?php
function getFromArray($array, $key, $default = null) {
	return isset($array[$key]) ? $array[$key] : $default;
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function validDate($date) {
	if (!preg_match('/^(\d{2})-(\d{2})-(\d{4})$/', $date, $matches)) {
		return  false;
	}
	if (!checkdate($matches[2], $matches[1], $matches[3])) {
		return false;
	}
	return true;
}

