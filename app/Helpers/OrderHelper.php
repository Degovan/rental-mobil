<?php

namespace App\Helpers;

class OrderHelper
{
    public const COST = 16666.66;
    public const HONOUR = 10000;

    public static function rentalCar(String $type, Int $hour)
    {
        switch ($type) {
            case 'APV':
                return [
                    'cost' => round(static::COST * ($hour - 3)) + 50000,
                    'honour' => round(static::HONOUR * ($hour - 3)) + 50000
                ];
                break;
            case 'ELF':
                return [
                    'cost' => round(static::COST *  ($hour - 3)) + 100000,
                    'honour' => round(static::HONOUR * ($hour - 3)) + 60000
                ];
                break;
        }
    }
}
