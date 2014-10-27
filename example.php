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

// here are some fixed names that keep the same color
$name = 'Carsten Brandt';
$color = Color::calculateColor($name);
echo "<span style=\"color: $color\">$name</span><br/>\n";
$name = 'Albert Becker';
$color = Color::calculateColor($name);
echo "<span style=\"color: $color\">$name</span><br/>\n";
$name = 'Dr. Marcel Smith';
$color = Color::calculateColor($name);
echo "<span style=\"color: $color\">$name</span><br/>\n";
// some random names to get a feeling for the colors it creates
for($i = 0; $i < 35; $i++) {
	$name = $faker->name;
	$color = Color::calculateColor($name);
	echo "<span style=\"color: $color\">$name</span><br/>\n";
}
?>
</body>
</html>
