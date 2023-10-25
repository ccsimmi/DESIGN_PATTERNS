<?php

require_once 'vendor/autoload.php';

use App\Ducks\MallardDuck;
use App\Ducks\MarbledDuck;
use App\Ducks\RubberDuck;

$mallard = new MallardDuck();
$marbled = new MarbledDuck();
$rubber = new RubberDuck();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ducks with strategies</title>
    <link rel="stylesheet" href="public/styles.css" />
</head>
<body>
    <h1>Strategy pattern with ducks</h1>
    <div class="container">
        <div class="card">
            <img alt="Mallard duck" src="public/images/mallard.jpg" />
            <div>
                <p class="card__title"><?= $mallard->getDuckName() ?></p>
                <p class="card__description"><?= $mallard->describeDuck() ?></p>
                <div class="card__stats">
                    <p>Stats</p>
                    <p><?= $mallard->performFly() ?></p>
                    <p><?= $mallard->performQuack() ?></p>
                </div>
            </div>
        </div>

        <div class="card">
            <img alt="Marbled duck" src="public/images/marbled.jpeg" />
            <div>
                <p class="card__title"><?= $marbled->getDuckName() ?></p>
                <p class="card__description"><?= $marbled->describeDuck() ?></p>
                <div class="card__stats">
                    <p>Stats</p>
                    <p><?= $marbled->performFly() ?></p>
                    <p><?= $marbled->performQuack() ?></p>
                </div>
            </div>
        </div>

        <div class="card">
            <img alt="Rubber duck" src="public/images/rubber.jpg" />
            <div>
                <p class="card__title"><?= $rubber->getDuckName() ?></p>
                <p class="card__description"><?= $rubber->describeDuck() ?></p>
                <div class="card__stats">
                    <p>Stats</p>
                    <p><?= $rubber->performFly() ?></p>
                    <p><?= $rubber->performQuack() ?></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

