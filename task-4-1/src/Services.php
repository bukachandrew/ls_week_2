<?php

trait Services
{
    private $priceGps = 15;
    private $priceDriver = 100;

    public function serviceGps($minutes)
    {
        $total = $this->roundingHourly($minutes ?? 60) * $this->priceGps;
        $this->addService($total);
    }

    public function serviceDriver()
    {
        $this->addService($this->priceDriver);
    }
}