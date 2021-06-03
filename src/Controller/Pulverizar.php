<?php


namespace App\Controller;


use App\Services\PulverizarService;

class Pulverizar
{
    private PulverizarService $pulverizarService;

    public function __construct(PulverizarService $pulverizarService)
    {
        $this->pulverizarService = $pulverizarService;
    }

    public function __invoke(string $type): bool
    {
        return $this->pulverizarService->pulverizarOlmo($type);
    }
}
