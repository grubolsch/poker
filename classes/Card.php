<?php

class Card
{
    private Suit $suit;
    private int $value;

    public function __construct(Suit $suit, int $value) {
        $this->setSuit($suit);
        $this->setValue($value);
    }

    public function getSuit(): Suit
    {
        return $this->suit;
    }

    private function setSuit(Suit $suit): void
    {
        $this->suit = $suit;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setValue(int $value): void
    {
        if ($value > 14 || $value <= 1) { //alle waardes boven de 14, en gelijk of onder de 1
            die('Ongeldige waarde van kaart');
        }

        $this->value = $value;
    }
}
