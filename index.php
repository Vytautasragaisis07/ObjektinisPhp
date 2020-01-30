<?php
require "vendor/autoload.php";
use OOP\User;

$item1 = new User('Dviratis', 'BMX');
$item1->addprice('599$');
$item1->addWeight('19kg');
$item1->addEngine('Nera');
$item1->addSpeed('50km');
$item1->addInfo('Geras dviratis');
$item1->addSeats('2');

$item2 = new User('Automobilis', 'Subaru WRX', '20 000$', '1,5t', '3,5l');
$item2->addprice('20 000$');
$item2->addWeight('1,5t');
$item2->addEngine('Yra');
$item2->addSpeed('200km');
$item2->addInfo('Labai geras automobilis');
$item2->addSeats('5');

$item3 = new User('Motociklas', 'NRG-900', '5 000$', '0,5t', '2l');
$item3->addprice('5 000$');
$item3->addWeight('0,5t');
$item3->addEngine('Yra');
$item3->addSpeed('300km');
$item3->addInfo('Geras motociklas');
$item3->addSeats('2');


?>
<ul>
    <ul>
        <?php foreach($item1->show() as $value):?>
            <li><?=$value;?></li>
        <?php endforeach;?>
    </ul>
    <ul>
        <br>
        <li><?=$item1->showPrice()?></li>
        <li><?=$item1->showWeight()?></li>
        <li><?=$item1->showSpeed()?></li>
        <li><?=$item1->showEngine()?></li>
        <li><?=$item1->showInfo()?></li>
        <li><?=$item1->showSeats()?></li>
    </ul>
    <br>
    <ul>
        <?php foreach($item2->show() as $value):?>
            <li><?=$value;?></li>
        <?php endforeach;?>
        <br>
        <li><?=$item2->showPrice()?></li>
        <li><?=$item2->showWeight()?></li>
        <li><?=$item2->showSpeed()?></li>
        <li><?=$item2->showEngine()?></li>
        <li><?=$item2->showInfo()?></li>
        <li><?=$item2->showSeats()?></li>
    </ul>
    <br>
    <ul>
        <?php foreach($item3->show() as $value):?>
            <li><?=$value;?></li>
        <?php endforeach;?>
        <br>
    </ul>
    <ul>
        <li><?=$item3->showPrice()?></li>
        <li><?=$item3->showWeight()?></li>
        <li><?=$item3->showSpeed()?></li>
        <li><?=$item3->showEngine()?></li>
        <li><?=$item3->showInfo()?></li>
        <li><?=$item3->showSeats()?></li>
    </ul>
</ul>
