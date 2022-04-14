<?php

require_once 'Car.php';


$batmobile = new Car();

$batmobile ->setParkBrake(true);

try {
    $batmobile->setParkBrake(false);
    }catch (Exception $e) {
        $this->setParkBrake(false);
    } finally {
    echo "En voiture simone";
}
