<?php


namespace App\Services;


class RegarService
{
    private ?int $month;

    public function __construct(int $month = null)
    {
        $this->month = $month;

        if (null === $month) {
            $this->month = date('m');
        }
    }

    public function regarBonsai(string $type): ?string
    {
        if ($this->month >= 7 && $this->month <= 8) {
            return "muy frecuente";
        }

        if ($type === 'MANZANO') {
            return "frecuente";
        }

        if ($type === 'OLMO') {
            return "muy frecuente";
        }

        if ($type === 'FICUS') {
            return "poco frecuente";
        }

        if ($type === 'OLIVO') {
            return "poco frecuente";
        }

        return null;
    }
}
