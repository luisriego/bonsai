<?php


namespace App\Controller;


use App\Services\TransplantarService;

class Transplantar
{
    private TransplantarService $transplantarService;

    public function __construct(TransplantarService $transplantarService)
    {
        $this->transplantarService = $transplantarService;
    }

    public function __invoke(): bool
    {
        return $this->transplantarService->transplantarBonsai();
    }
}
