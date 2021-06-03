<?php

declare(strict_types=1);

namespace App\Entity;

use App\Utils\Bonsai\Type;

class Bonsai
{
    private string $id;
    private string $type;

    public function __construct($id, $type) {
        $this->type = Type::MANZANO;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function Riego($type): void
    {

    }

    public function Abono($type): void
    {

    }

    public function Transplante($type): void
    {

    }

    public function Pulverizar($type): void
    {
        if ($type !== Type::OLMO) {
            // throws exception
        }


    }
}
