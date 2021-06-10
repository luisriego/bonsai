<?php


namespace App\Services;


class TransplantarService
{
    private ?int $month;

    public function __construct(int $month = null)
    {
        $this->month = $month;

        if (null === $month) {
            $this->month = date('m');
        }
    }

    public function transplantarBonsai(): bool
    {
        if ($this->month == 3) {
            return true;
        }

        return false;
    }
}
