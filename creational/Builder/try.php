<?php
class Burger
{
    protected int $size;
    protected bool $cheese = false;
    protected bool $pepperoni = false;
    protected bool $lettuce = false;
    protected bool $tomato = false;

    public function __construct(BurgerBuilder $builder)
    {
        $this->size = $builder->size;
        $this->cheese = $builder->cheese;
        $this->pepperoni = $builder->pepperoni;
        $this->lettuce = $builder->lettuce;
        $this->tomato = $builder->tomato;
    }
}

class BurgerBuilder
{
    public int $size;
    public bool $cheese = false;
    public bool $pepperoni = false;
    public bool $lettuce = false;
    public bool $tomato = false;

    public function __construct(int $size)
    {
        $this->size = $size;
    }

    public function addPepperoni(): self
    {
        $this->pepperoni = true;
        return $this;
    }

    public function addLettuce(): self
    {
        $this->lettuce = true;
        return $this;
    }

    public function addCheese(): self
    {
        $this->cheese = true;
        return $this;
    }

    public function addTomato(): self
    {
        $this->tomato = true;
        return $this;
    }

    public function build(): Burger
    {
        return new Burger($this);
    }
}

$burger = (new BurgerBuilder(14))
    ->addPepperoni()
    ->addLettuce()
    ->addTomato()
    ->build();
