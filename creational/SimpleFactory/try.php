<?php
spl_autoload_register(static function ($className) {
    include $className . '.php';
});

$newStaticCar = CarStaticFactory::makeCar('black', 'Sport car');
echo 'Color: ' . $newStaticCar->getColor() . ' Type: ' . $newStaticCar->getType() . PHP_EOL;

$carFactory = new CarFactory();
$newCar = $carFactory->makeCar('white', 'SUV');
echo 'Color: ' . $newCar->getColor() . ' Type: ' . $newCar->getType() . PHP_EOL;

/*
 * Когда создание объекта подразумевает какую-то логику, а не просто несколько присваиваний,
 * то имеет смысл делегировать задачу выделенной фабрике, а не повторять повсюду один и тот же код.
 * Простая фабрика просто генерирует экземпляр для клиента без предоставления какой-либо логики экземпляра.
 */
