<?php
interface Transport { public function getDescription(): void; }

class Airplane implements Transport
{
    public function getDescription(): void
    {
        echo 'Airplane' . PHP_EOL;
    }
}

class Car implements Transport
{
    public function getDescription(): void
    {
        echo 'Car' . PHP_EOL;
    }
}

interface Driver { public function getDriverType(): void; }

class CarDriver implements Driver
{
    public function getDriverType(): void
    {
        echo 'i\'m car driver' . PHP_EOL;
    }
}

class Pilot implements Driver
{
    public function getDriverType(): void
    {
        echo 'i\'m pilot' . PHP_EOL;
    }
}

interface Travel { public function takeDriver(): Driver; public function getTransport(): Transport; }

class AirPlaneTravelFactory implements Travel
{
    public function takeDriver(): Driver
    {
        return new Pilot();
    }

    public function getTransport(): Transport
    {
        return new Airplane();
    }
}

class CarTravelFactory implements Travel
{
    public function takeDriver(): Driver
    {
        return new CarDriver();
    }

    public function getTransport(): Transport
    {
        return new Car();
    }
}

$airPlaneTravelFactory = new AirPlaneTravelFactory();
$airPlaneTravelFactory->takeDriver()->getDriverType();
$airPlaneTravelFactory->getTransport()->getDescription();

$carTravelFactory = new CarTravelFactory();
$carTravelFactory->takeDriver()->getDriverType();
$carTravelFactory->getTransport()->getDescription();
