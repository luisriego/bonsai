<?php


namespace App\Services;


class PulverizarService
{
    public function __construct()
    { }

    public function pulverizarOlmo(string $type): bool
    {
        if ($type === 'OLMO') {
            return true;
        }

        return false;
    }
}
