<?php

class Card
{
    private string $suit;
    private int $value;

    public function __construct(string $suit, int $value) {
        $this->setSuit($suit);
        $this->setValue($value);
    }

    public function getSuit(): string
    {
        return $this->suit;
    }

    public function setSuit(string $suit): void
    {
        $allowedSuits = ['heart', 'clover', 'diamond', 'spade'];

        if (!in_array($suit, $allowedSuits)) {
            die('Ongeldige kaart');
        }

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

$card = new Card();
$card->setSuit('heart');
echo $card->getSuit();

echo PHP_EOL;

$card2 = new Card();
$card2->setSuit('clover');
echo $card2->getSuit();
