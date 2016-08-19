<?php

require_once 'php-functions.php';

$day = getFromArray($_POST, 'day');
$month = getFromArray($_POST, 'month');
$year = getFromArray($_POST, 'year');
$hours = getFromArray($_POST, 'hours');
$minute = getFromArray($_POST, 'minute');
$seconds = getFromArray($_POST, 'seconds');
$addDay = getFromArray($_POST, 'addDay');
$addMonth = getFromArray($_POST, 'addMonth');
$addYear = getFromArray($_POST, 'addYear');
$addHours = getFromArray($_POST, 'addHours');
$addMinute = getFromArray($_POST, 'addMinute');
$addSecond = getFromArray($_POST, 'addSecond');
$format = getFromArray($_POST, 'format');
$errors = '' ;
$date = '';
$newDate = '';

if($_POST){
	
	if ($day != '' && $month != '' && $year != '') {
		$date = sprintf('%s-%s-%s', $day, $month, $year);
		if (!validDate($date)) {
			$errors = 'The date is not valid! ';
		}
	}
	
	if ($day == '' || $month == '' || $year == '') {
		$errors = 'The date is not valid! ';
	}
	
	if (!is_numeric($hours) || !is_numeric($minute) || !is_numeric($seconds)) {
		$errors .= 'The time is not valid!';
	}

	if (!$errors) {
		$year += $addYear;
		$month += $addMonth;
		$day += $addDay;
		$hours += $addHours;
		$minute += $addMinute;
		$seconds += $addSecond;
		
		$errorsDate= mktime($hours, $minute, $seconds, $month, $day, $year);
		$newDate = date($format, $errorsDate);
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Calculate Date and Time</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/index.css" />
	</head>
	<body>
		<div id="box">
			<form id="formCr" action="" method="post">
				<div class="wrapper wrapper1">
					<h1>Input Date and Time</h1>
					<div>
						<label for="year">Year</label>
						<input type="text" id="year" name="year" />
					</div>
					<div>
						<label for="month">Month</label>
						<input type="text" id="month" name="month" />
					</div>
					<div>
						<label for="day">Day</label>
						<input type="text" id="day" name="day" />
					</div>
					<div>
						<label for="hours">Hours</label>
						<input type="text" id="hours" name="hours" />
					</div>
					<div>
						<label for="minute">Minute</label>
						<input type="text" id="minute" name="minute" />
					</div>
					<div>
						<label for=seconds>Second</label>
						<input type="text" id="seconds" name="seconds" />
					</div>
				</div>
				<div class="wrapper wrapper1">
					<h1>Edit Data and Time</h1>
					<div>
						<label for="addYear">Add Year</label>
						<input type="text" id="addYear" name="addYear" />
					</div>
					<div>
						<label for="addMonth">Add Month</label>
						<input type="text" id="addMonth" name="addMonth" />
					</div>
					<div>
						<label for="addDay">Add Day</label>
						<input type="text" id="addDay" name="addDay" />
					</div>
					<div>
						<label for="addHours">Add Hours</label>
						<input type="text" id="addHours" name="addHours" />
					</div>
					<div>
						<label for="addMinute">Add Minute</label>
						<input type="text" id="addMinute" name="addMinute" />
					</div>
					<div>
						<label for=addSecond>Add Second</label>
						<input type="text" id="addSecond" name="addSecond" />
					</div>
				</div>
				<div class="wrapper wrapper1">
					<p id="<?= $errors ? 'err' : ''?>"><?= $errors;?></p>
					<h1>Result Date</h1>
					<div>
						<label for="format">Select date format</label>
						<select name="format" id="format">
							<option selected="selected">Y-m-d h:i:sa</option>
							<option>Y/m/d h:i:s</option>
							<option>Y.m.d h:i:sa</option>
							<option>d-m-Y h:i:sa</option>
							<option>m-d-Y h:i:s</option>
						</select>
					</div>
					<div>
						<label for="newDate">Result</label>
						<input type="text" id="newDate" name="newDate" disabled="disabled" value="<?=$newDate;?>"/>
					</div>
					<div>
						<button>See Result</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>