<?php
require_once 'AbstractHighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Vehicle.php';
require_once 'Bike.php';
require_once 'Skateboard.php';
require_once 'Car.php';
require_once 'LightableInterface.php';
require_once 'Speedometer.php';

/*$homerCar = new Car ('blue', '2', 'electric');
$homerCar->setHasParkBrake(true);

try{
    echo $homerCar->start();

} catch(Exception $e) {
    if ($homerCar->setHasParkBrake(false)) ;
} finally {
    echo'Ma voiture roule comme un donut';
}
    var_dump($homerCar);

$bike = new Bike ('blue', '3');
$bike->setCurrentSpeed(20);

$bike -> switchOn();

var_dump($bike->switchOn());*/

echo Speedometer::convertKmToMiles('Miles 10');

echo Speedometer::convertMilesToKm('Kilometres 6.21');









