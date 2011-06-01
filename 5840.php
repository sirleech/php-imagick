<?php
// imageMagick (php5 imagick) test
// text justification constants
define("LEFT", 1);
define("CENTER", 2);
define("RIGHT", 3);

$text = "Estimated landscape water
flows and stores 2009-10";

/* Read the image */
$im = new Imagick("5840.png");

/* Create a border for the image */
$im->borderImage(new ImagickPixel("gray"), 1, 1);

$draw = new ImagickDraw();

//title
$draw->setFontSize(26);
$draw->setFont("../fonts/HelveticaNeueLight.ttf");
$draw->setTextAlignment(RIGHT);
$draw->setFillColor('#a4610f');
$draw->annotation(800, 50,$text );
//small text
$draw->setFillColor('#000000');
$draw->setFontSize(15);
$draw->setTextAlignment(LEFT);
$draw->annotation(20, 70, "Hello World!");
//
$draw->setFontSize(12);
$draw->annotation(20, 100, "Hello World!");
//
$draw->setFont("../fonts/HelveticaNeueBold.ttf");
$draw->setFontSize(15);
$draw->annotation(20,300, "Precipitation");


//circle
$draw->setFillColor('green');    // Set up some colors to use for fill and outline
$draw->setStrokeColor( new ImagickPixel( 'black' ) );
$draw->circle( 100, 100, 120, 120 );    // Draw the circle already 
$draw->setStrokeWidth('5');
$draw->circle( 200, 200, 220, 220 );    // Draw the circle already 

//draw
$im->drawImage($draw);


/* Output the image*/
header("Content-Type: image/png");
echo $im;
?>

