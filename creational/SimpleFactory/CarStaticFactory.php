<?php


class CarStaticFactory
{
    public static function makeCar(string $color, string $type): CarInterface
    {
        return new NewCar($color, $type);
    }
}
