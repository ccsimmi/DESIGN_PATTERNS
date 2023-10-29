<?php

use App\Newspaper;
use App\Observers\Reader;

require_once 'vendor/autoload.php';

$newspaper = new Newspaper('NY Times');

$readers = [new Reader('Alice'), new Reader('Bob'), new Reader('Carlos')];

foreach($readers as $reader) {
    $newspaper->attach($reader);
}

?>

<h1>Readers list</h1>
<p>October</p>
<ul>
    <?= $newspaper->notify() ?>
</ul>
<div class="stats">
    <p>3 new subscriptions</p>
    <p>0 unsubscribes</p>
</div>
<p>November</p>
<!-- Bob unsubs -->
<?php $newspaper->detach($readers[1]); ?>
<ul>
    <?= $newspaper->notify() ?>
</ul>
<div class="stats">
    <p>2 new subscriptions</p>
    <p>1 unsubscribes</p>
    <p><?= 'Bob has unsubscribed' ?></p>
</div>
