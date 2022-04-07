<?php
/**
 * @name index.php
 * @author Aélion (jean-luc.aubert@aelion.fr)
 * @version 1.0.0
 * Entry point in the application. Every Request may fallback to this unique file
 * then is dispatched to the according controller.
 * Finally, after the request was processed, Response will be send to web server
 * to be available to the client.
 */

// Require Composer autoloader based on PSR4 definitions (@see composer.json)
require_once('./../vendor/autoload.php');

use \App\Models\Coffee;
use App\Models\Tea;
use App\Strategies\Beverages\OriginPriceStrategy;
use \App\Collections\HotBeverageCollection;
use App\Strategies\Beverages\AsTableRowStrategy;

// Instance de la collection
$collection = new HotBeverageCollection();

// Instance de la classe Coffee
$coffee = new Coffee();
$coffee
    ->setType('arabica')
    ->setOrigin('Colombie')
    ->setPrice(15.00);

$collection->add($coffee);

$coffee = new Coffee();
$coffee
    ->setOrigin('France')
    ->setPrice(5.00);
try {
    $coffee
        ->setType('Topinambour');

} catch (\Exception $e) {
    $coffee
        ->setType('Robusta');
}

$collection->add($coffee);

$tea = new Tea();
$tea
    ->setType('Noir')
    ->setOrigin('Chine')
    ->setPrice(13.00);

$collection->add($tea);


echo $collection;
echo $collection->total();