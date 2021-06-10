<?php


namespace App\Services;


class PulverizarService
{
    public function pulverizarOlmo(string $type): ?string
    {
        if ($type !== 'OLMO') {
            return null;
        }

        return "muy frecuente";
    }
}
