<?php
include 'InterfaceTariff.php';
include 'Services.php';

abstract class Tariff implements InterfaceTariff
{
    use Services;

    protected $totalPrice = 0;
    protected $priceKm;
    protected $priceMinute;
    public $km;
    public $minute;

    public function __construct(float $km, float $minute)
    {
        $this->km = $km;
        $this->minute = $minute;
    }

    abstract public function calculation(): void;

    public function addService($priceService): void
    {
        $this->totalPrice += $priceService;
    }

    public function getTotalPrice(): float
    {
        $this->calculation();
        return $this->totalPrice;
    }

    protected function roundingHourly(float $number): float
    {
        return ceil($number / 60) * 60;
    }

}