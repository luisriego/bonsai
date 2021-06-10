<?php

declare(strict_types=1);


namespace App\Tests\Services\Bonsai;


use App\Utils\Bonsai\Tipo;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class BonsaiServiceTestBase extends TestCase
{
    /** @var integer|MockObject */
    protected $month;

    public function setUp(): void
    {
        parent::setUp();

        $this->month = $this->getMockBuilder(Tipo::class)->disableOriginalConstructor()->getMock();
    }
}