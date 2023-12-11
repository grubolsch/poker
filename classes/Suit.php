<?php

class Suit {
    private string $name;

    private const allowedSuits = ['heart', 'clover', 'diamond', 'spade'];

    public function __construct(string $name)
    {
        if (!in_array($name, self::allowedSuits)) {
            die('Ongeldige kaart');
        }

        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public static function getSuits() : array {
        $output = [];

        foreach(self::allowedSuits as $allowedSuit) {
            $output[] = new Suit($allowedSuit);
        }

        return $output;
    }
}

Suit::getSuits();


