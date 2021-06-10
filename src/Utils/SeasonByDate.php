<?php

declare(strict_types=1);


namespace App\Utils;


class SeasonByDate
{
    public function getSeasonByDate(\DateTime $dateTime): string
    {
        // get the season dates
        $spring = new \DateTime('March 20');
        $summer = new \DateTime('June 20');
        $fall = new \DateTime('September 22');
        $winter = new \DateTime('December 21');

        switch(true) {
            case $dateTime >= $spring && $dateTime < $summer:
                return 'spring';
                break;

            case $dateTime >= $summer && $dateTime < $fall:
                return 'summer';
                break;

            case $dateTime >= $fall && $dateTime < $winter:
                return 'fall';
                break;

            default:
                return 'winter';
        }
    }

    public function timestampToSeason(\DateTime $dateTime): string
    {
        $dayOfTheYear = $dateTime->format('z');
        if($dayOfTheYear < 80 || $dayOfTheYear > 356){
            return 'winter';
        }
        if($dayOfTheYear < 173){
            return 'spring';
        }
        if($dayOfTheYear < 266){
            return 'summer';
        }
        return 'fall';
    }
}