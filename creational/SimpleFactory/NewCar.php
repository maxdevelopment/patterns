<?php


class NewCar implements CarInterface
{
    protected string $color;
    protected string $type;

    public function __construct(string $color, string $type)
    {
        $this->color = $color;
        $this->type = $type;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
