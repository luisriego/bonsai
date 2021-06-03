<?php


namespace App\Controller;


use App\Services\RegarService;

class Regar
{
    private RegarService $regarService;

    public function __construct(RegarService $regarService)
    {
        $this->regarService = $regarService;
    }

    public function __invoke(string $type): string
    {
        return $this->regarService->regarBonsai($type);
    }
}
