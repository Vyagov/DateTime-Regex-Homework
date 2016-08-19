<?php
require_once 'php-functions.php';

$date = '';
$result = '';

if ($_POST) {
	$day = getFromArray($_POST, 'day');
	$month = getFromArray($_POST, 'month');
	$year = getFromArray($_POST, 'year');
	
	if ($day != '' && $month != '' && $year != '') {
		$date = sprintf('%s-%s-%s', $day, $month, $year);
		
		if (validDate($date)) {
			$result = 'The entered data are valid date.';
		}
		
		if (!validDate($date)) {
			$result = 'The entered data are not valid date.';
		}
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Validate Date</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/index.css" />
	</head>
	<body>
		<div class="wrapper">
			<div>
				<h1>Input Date</h1>
				<p id="<?= validDate($date) ? 'succ' : 'err'?>"><?= $result;?></p>
				<form id="formCr" action="" method="post">
					<div>
						<label for="day">Day</label>
						<input type="text" id="day" name="day" autofocus="autofocus" />
					</div>
					<div>
						<label for="month">Month</label>
						<input type="text" id="month" name="month" />
					</div>
					<div>
						<label for="year">Year</label>
						<input type="text" id="year" name="year" />
					</div>
					<div>
						<button>Submit</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>