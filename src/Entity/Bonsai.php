<?php

declare(strict_types=1);

namespace App\Entity;

use App\Controller\Pulverizar;
use App\Controller\Regar;
use App\Utils\Bonsai\Tipo;

class Bonsai
{
    private string $id;
    private string $tipo;

    public function __construct($id, $tipo) {
        $this->tipo = Tipo::MANZANO;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getType(): string
    {
        return $this->tipo;
    }

    public function setType(string $tipo): void
    {
        $this->tipo = $tipo;
    }

    public function Regar($tipo): void
    {

    }
//
//    public function Abono($tipo): void
//    {
//
//    }
//
//    public function Transplante($tipo): void
//    {
//
//    }
//
//    public function Pulverizar($tipo): void
//    {
//        if ($tipo !== Tipo::OLMO) {
//            // throws exception
//        }
//
//
//    }
}
