<?php
require __DIR__ . '/vendor/autoload.php';
$loader = require __DIR__.'/vendor/autoload.php';
use Victorybiz\GeoIPLocation\GeoIPLocation;
use Longman\IPTools\Ip;


if(isset($_POST['submit'])){
    $num_decimal = $_POST['text'];

    
    $geoip = new \Victorybiz\GeoIPLocation\GeoIPLocation();
    $dec = Ip::long2ip($num_decimal); 
    echo "Ip adress: ";
    echo  $dec; //3232235777
    echo "<br>";
    echo "<br>";
    //echo $geoip->getIP();
    echo $geoip->setIP('$dec');
    echo "<br>";

    echo "City: ";
    echo  $geoip->getCity(); // Return client IP City (null if none)
    echo "<br>";

    echo "Region: ";
    echo  $geoip->getRegion(); // Return client IP Region (null if none)
    echo "<br>";

    echo 'Country: ';
    echo  $geoip->getPostalCode();
    echo "<br>";

    echo "Longitude: ";
    echo $geoip->getLongitude(); // Return client IP Longitude (null if none)
    echo "<br>";

    echo "Latitude: ";
    echo $geoip->getLatitude(); // Return client IP Latitude (null if none)
    echo "<br>";
 
    echo 'timezone: ';
    echo  $geoip->getLocation(); 
    echo "<br>";

    
}
echo '
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<form action="" method="post">
    <input type="text" placeholder="Introduce un numero decimal " name="text">
    <input type="submit" value="Buscar" name="submit">
</form>

</body>
</html>
';