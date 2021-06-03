<?php


namespace App\Controller;


use App\Services\AbonarService;

class Abonar
{
    private AbonarService $abonarService;

    public function __construct(AbonarService $abonarService)
    {
        $this->abonarService = $abonarService;
    }

    public function __invoke(): bool
    {
        return $this->abonarService->abonarBonsai();
    }
}
