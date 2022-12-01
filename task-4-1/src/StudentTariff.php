<?php

namespace Tariff;

use Tariff;

class StudentTariff extends Tariff
{
    protected $priceKm = 4;
    protected $priceMinute = 1;

    public function calculation(): void
    {
        $result = $this->km * $this->priceKm + $this->minute * $this->priceMinute;
        $this->totalPrice += $result;
    }
}