<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web Technologies Nahum</title>
    <link rel="stylesheet" href="style/general.css">
</head>
<body>
<h1>Top 5 Visited Locations!</h1>
<p>Click on any of the blue circles to learn more about that location!</p>
<map name="wordlmap">
    <area shape="rect" coords="161,211,167,217" href="place_pages/place_one.php" alt="worldoutline.jpg">
    <area shape="rect"  coords="158,220,164,226" href="place_pages/place_two.php" alt="worldoutline.jpg">
    <area shape="rect"  coords="295,155,303,161" href="place_pages/place_three.php" alt="worldoutline.jpg">
    <area shape="rect"  coords="351,171,357,177" href="place_pages/place_four.php" alt="worldoutline.jpg">
    <area shape="rect"  coords="308,171,314,177" href="place_pages/place_five.php" alt="worldoutline.jpg">
</map>
<img class="worldmap" usemap="#wordlmap" src="place_pages/images/worldoutline.jpg" alt="worldoutline.jpg">

<p>Or navigate to these locations using the list below.</p>
<ul>
    <li><a href="place_pages/place_one.php">Caye Caulker, Belize</a></li>
    <li><a href="place_pages/place_two.php">Fuego Volcano, Ancatenango, Nicaragua</a></li>
    <li><a href="place_pages/place_three.php">Amsterdam, Netherlands</a></li>
    <li><a href="place_pages/place_four.php">Dargavs Mountains, North Ossetia, Russia</a></li>
    <li><a href="place_pages/place_five.php">Guaita Towers, San Marino</a></li>
</ul>
</body>
</html>