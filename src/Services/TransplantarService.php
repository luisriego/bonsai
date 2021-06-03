<?php


namespace App\Services;


class TransplantarService
{
    public function __construct()
    { }

    public function transplantarBonsai(): bool
    {
        $month = date('m');

        if ($month == 3) {
            return true;
        }

        return false;
    }
}
