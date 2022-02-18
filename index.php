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
    <area shape="rect" coords="162,212,166,216" href="place_pages/place_one.php" alt="worldoutline.jpg">
    <area shape="rect"  coords="159,221,163,225" href="place_pages/place_two.php" alt="worldoutline.jpg">
    <area shape="rect"  coords="296,156,302,160" href="place_pages/place_three.php" alt="worldoutline.jpg">
    <area shape="rect"  coords="352,172,356,176" href="place_pages/place_four.php" alt="worldoutline.jpg">
    <area shape="rect"  coords="309,172,313,176" href="place_pages/place_five.php" alt="worldoutline.jpg">
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