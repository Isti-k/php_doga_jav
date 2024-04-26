<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Kovacs Istvan Gabor</title>
</head>
<body>
    <?php
    $vezeteknev = array("Kovács", "Lukács", "Pfiffer");
    $keresztnev = array("Laci", "Levente", "Szandi");
    $randomszam = array(rand(1998, 2005),rand(1998, 2005),rand(1998, 2005));
    echo "<table>";
		echo "<tr>";
		echo "<th>Vezetéknev</th><th>Keresztnév</th><th>Randomszám</th>";
		echo "</tr>";
		for ($index = 0; $index < count($vezeteknev); $index++)
		{
            echo "<tr>";
			echo "<td>$vezeteknev[$index]</td><td>$keresztnev[$index]</td><td>$randomszam[$index]</td>";
            echo "</tr>";
	    }
	echo "</table>";
    ?>
</body>
</html>