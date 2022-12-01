<?php

namespace Tariff;

use Tariff;

class HourlyTariff extends Tariff
{
    protected $priceKm = 0;
    protected $priceHour = 200;

    public function calculation(): void
    {
        $result = $this->roundingHourly($this->minute) * $this->priceHour / 60;
        $this->totalPrice += $result;
    }
}