<?php


namespace App\Services;


class RegarService
{
    public function __construct()
    { }

    public function regarBonsai(string $type): string
    {
        $month = date('m');

        if ($month > 7 && $month < 9) {
            return "muy frequente";
        }

        if ($type === 'MANZANO') {
            return 'frequente';
        }

        if ($type === 'OLMO') {
            return 'muy frequente';
        }

        if ($type === 'FICUS' || $type === 'OLIVO') {
            return "poco frequente";
        }

    }
}
