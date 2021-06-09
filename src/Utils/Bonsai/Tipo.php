<?php

declare(strict_types=1);


namespace App\Utils\Bonsai;


abstract class Tipo
{
    public const MANZANO = 'MANZANO';
    public const OLMO = 'OLMO';
    public const FICUS = 'FICUS';
    public const OLIVO = 'OLIVO';

    public static function getSupportedTypes(): array
    {
        return [
            self::MANZANO,
            self::OLMO,
            self::FICUS,
            self::OLIVO,
        ];
    }
}