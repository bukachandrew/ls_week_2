<?php

interface InterfaceTariff
{
    public function calculation(): void;

    public function addService(float $priceService): void;

    public function getTotalPrice(): float;
}