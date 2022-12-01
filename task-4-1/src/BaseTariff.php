<?php

namespace Tariff;

use Tariff;

class BaseTariff extends Tariff
{
    protected $priceKm = 10;
    protected $priceMinute = 3;

    public function calculation(): void
    {
        $result = $this->km * $this->priceKm + $this->minute * $this->priceMinute;
        $this->totalPrice += $result;
    }
}
