<?php
//include $_SERVER['DOCUMENT_ROOT'].'/ICS325/php/vehicle.php';
include '/home/students/ics325su20/ics325su2028/public_html/php/vehicle.php';

function lab5() {
    $foo = new car("car");
    $foo->vehicle("Karen", 4, "Plastic", "Styrofoam", "Potato");
    $foo->setMake("Chrysler");
    $foo->setModel("Pacifica");
    $foo->setYear(2011);
    $foo->setRev("Revving in my");
    $foo->setMusic("Rocking to TikTok videos");
    $foo->build();

    $foobar = new truck("Truck");
    $foobar->vehicle("Chad", 4, "Tuff Wheels", "American Steel", "V100");
    $foobar->setMake("Ford");
    $foobar->setModel("F-950");
    $foobar->setYear("2026");
    $foobar->setPowertrain("8x8");
    $foobar->setRev("Rolling coal in my");
    $foobar->setMusic("Playing all american rejects");
    $foobar->build();

    $fooz = new car("bike");
    $fooz->vehicle("Speedy", 2, "Carbon Fiber", "Carbon Fiber", "1000cc");
    $fooz->setModel("Kawasaki");
    $fooz->setMake("Ninja");
    $fooz->setYear("2020");
    $fooz->setRev("Zooming on my");
    $fooz->setMusic("Using bluetooth to ignore the sirens");
    $fooz->build();

    echo "<br>";
    echo get_class($foo) . " as an Array Object<br>";
    print_r($foo);
    echo "<br>";
    echo get_class($foobar) . " as an Array Object<br>";
    print_r($foobar);
    echo "<br>";
    echo get_class($fooz) . " as an Array Object<br>";
    print_r($fooz);
    echo "<br>";
}
