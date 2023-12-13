<?php

class Deck {
    private array $cards;

    public function __construct()
    {
        foreach(Suit::getSuits() as $suit) {
            foreach(range(2, 14) as $value) {
                $this->cards[] = new Card($suit, $value);
            }
        }

    }

    public function shuffle(): void
    {
        shuffle($this->cards);
    }

    public function draw() : Card
    {
        return array_pop($this->cards);
    }
}
