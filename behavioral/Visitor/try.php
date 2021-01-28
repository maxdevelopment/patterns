<?php
interface Animal
{
    public function accept(AnimalOperation $operation);
}
interface AnimalOperation
{
    public function visitMonkey(Monkey $monkey);
    public function visitDolphin(Dolphin $dolphin);
}

class Monkey implements Animal
{
    public function shout()
    {
        echo 'Ooh oo aa aa!';
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitMonkey($this);
    }
}

class Dolphin implements Animal
{
    public function speak()
    {
        echo 'Tuut tuttu tuutt!';
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitDolphin($this);
    }
}

class Speak implements AnimalOperation
{
    public function visitMonkey(Monkey $monkey)
    {
        $monkey->shout();
    }

    public function visitDolphin(Dolphin $dolphin)
    {
        $dolphin->speak();
    }
}
$monkey = new Monkey();
$dolphin = new Dolphin();

$speak = new Speak();
$monkey->accept($speak);
$dolphin->accept($speak);

class Jump implements AnimalOperation
{
    public function visitMonkey(Monkey $monkey)
    {
        echo 'Jumped 20 feet high! on to the tree!';
    }

    public function visitDolphin(Dolphin $dolphin)
    {
        echo 'Walked on water a little and disappeared';
    }
}

$jump = new Jump();
$monkey->accept($speak);
$monkey->accept($jump);

$dolphin->accept($speak);
$dolphin->accept($jump);
