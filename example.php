<!DOCTYPE>
<html>
<head>
	<style type="text/css">
		body {
			width: 400px;
			margin: 36px auto;
		}
	</style>

	<title>example</title>
</head>
<body>
<?php
/**
 * @author Carsten Brandt <mail@cebe.cc>
 */
use cebe\colornick\Color;

require(__DIR__ . '/vendor/autoload.php');


$faker = Faker\Factory::create();

for($i = 0; $i < 35; $i++) {
	$name = $faker->name;
	$color = Color::calculateColor($name);
	echo "<span style=\"color: $color\">$name</span><br/>\n";
}
?>
</body>
</html>
