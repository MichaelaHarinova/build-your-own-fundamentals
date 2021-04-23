<?php
declare(strict_types=1);

class Product
{
    private ?int $id;
    private string $name;
    private float $price;
    private float $tax;
    private float $tvaPrice;

    public function __construct(?int $id, string $name, float $price, float $tax)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->tax = $tax;
        $this->tvaPrice = $this->calculateTvaPrice();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getTax(): float
    {
        return $this->tax;
    }

    public function getTvaPrice(): float
    {
        return $this->tvaPrice;
    }

    public function calculateTvaPrice(): float
    {
        return round(($this->price) * (1 + $this->tax), 2) ;
    }
}
