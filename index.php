<?php
require "vendor/autoload.php";
use OOP\User;
use OOP\Teacher;
use OOP\Bendruomene;
use OOP\Mokytojai;
use OOP\Mokiniai;
use OOP\Darbuotojai;
use OOP\Spausdintuvas;

$mokytojas = new Mokytojai('Mokytojas', 'mokytojas@gmail.com', '86574856');
$mokytojas->addComment('Labai geras');
$mokinys = new Mokiniai('Mokinys', 'mokinys@gmail.com', '86547569521');
$mokinys->addComment('Labai geras');
$darbuotojas = new Darbuotojai('Darbuotojas', 'darbuotojas@gmail.com', '862365478');
$darbuotojas->addComment('Labai geras');
Spausdintuvas::spausdinti($mokinys->profile());




?>
<ul>
    <?php foreach($mokytojas->profile() as $value):?>
        <li><?=$value;?></li>
    <?php endforeach;?>
    <li><?=$mokytojas->showComment()?></li>
</ul>
</ul>
<br>
<ul>
    <?php foreach($mokinys->profile() as $value):?>
        <li><?=$value;?></li>
    <?php endforeach;?>
    <li><?=$mokinys->showComment()?></li>
</ul>
<br>
<ul>
    <?php foreach($darbuotojas->profile() as $value):?>
        <li><?=$value;?></li>
    <?php endforeach;?>
    <li><?=$darbuotojas->showComment()?></li>
</ul>
<br>
