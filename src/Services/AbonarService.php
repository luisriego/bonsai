<?php


namespace App\Services;


class AbonarService
{
    public function __construct()
    { }

    public function abonarBonsai(): bool
    {
        $month = date('m');

        if ($month > '02' && $month < '06') {
            return true;
        }

        if ($month > '08' && $month < '12') {
            return true;
        }

        return false;
    }
}
