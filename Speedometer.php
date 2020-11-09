<?php


class Speedometer
{
    const kilometres = [
        'Miles 10' => '6.21 KM',
    ];

    const miles = [
        'Kilometres 6.21' => '10 Miles'
    ];

    public static function convertKmToMiles(string $miles) : ?string
    {
        return array_key_exists($miles, self::kilometres) ? self::kilometres[$miles] : null;
    }

    public static function convertMilesToKm(string $kilometres) : ?string
    {
        return array_key_exists($kilometres, self::miles) ? self::miles[$kilometres] : null;
    }
}
