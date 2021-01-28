<?php

class CarFactory
{
    public function makeCar(string $color, string $type): CarInterface
    {
        return new NewCar($color, $type);
    }
}
