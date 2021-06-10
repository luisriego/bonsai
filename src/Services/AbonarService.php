<?php


namespace App\Services;


use App\Utils\SeasonByDate;

class AbonarService
{
    private ?\DateTime $dateTime;

    public function __construct(\DateTime $dateTime = null)
    {
        $this->dateTime = $dateTime;

        if (null === $dateTime) {
            $this->dateTime = new \DateTime();
        }
    }

    public function abonarBonsai(\DateTime $ultimoAbono): bool
    {
        $diff = $ultimoAbono->diff($this->dateTime);
        if ($diff->days <= 30) {
            return false;
        }

        /** @var SeasonByDate $season */
        $season  = new SeasonByDate;
        $actualSeason = $season->timestampToSeason($this->dateTime);

        if ($actualSeason === 'spring' || $actualSeason === 'fall') {
            return true;
        }

        return false;
    }
}
