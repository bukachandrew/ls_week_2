<?php

include 'src/Tariff.php';
include 'src/BaseTariff.php';
include 'src/HourlyTariff.php';
include 'src/StudentTariff.php';

$baseTariff = new \Tariff\BaseTariff(5, 60);
$baseTariff->serviceGps(60);
echo "1. Тариф базовый(5 км, 60 минут) + добавить услугу GPS = " . $baseTariff->getTotalPrice();

echo "<br>";
$hourlyTariff = new \Tariff\HourlyTariff(5, 60);
$hourlyTariff->serviceGps(60);
$hourlyTariff->serviceDriver();
echo "2. Тариф почасовой(5 км, 60 минут) + Дополнительный водитель + добавить услугу GPS = " . $hourlyTariff->getTotalPrice();

echo "<br>";
$studentTariff = new \Tariff\StudentTariff(5, 60);
$studentTariff->serviceGps(60);
echo "3. Тариф студенческий(5 км, 60 минут) + добавить услугу GPS = " . $studentTariff->getTotalPrice();
