<?php


namespace App\Utils\Bonsai;


abstract class Type
{
    public const MANZANO = 'MANZANO';
    public const OLMO = 'OLMO';
    public const FICUS = 'FICUS';
    public const OLIVO = 'OLIVO';

    public static function getSupportedBonsaiTypes(): array
    {
        return [
            self::MANZANO,
            self::OLMO,
            self::FICUS,
            self::OLIVO,
        ];
    }
}
