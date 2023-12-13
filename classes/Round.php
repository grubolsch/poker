<?php

class Round
{
    private Deck $deck;

    private array $cards = [];

    /** @var Player[] */
    private array $players = [];

    private int $round = 1;

    public function __construct()
    {
        $this->deck = new Deck();


    //    foreach($this->players as $player) {}
    }


    public function getBalance() : int
    {
        $sum = 0;
        foreach($this->players as $player) {
            $sum += $player->getBet();
        }
        return $sum;
    }

    public function getCards(): array
    {
        return $this->cards;
    }

    public function addCard(Card $card): void
    {
        $this->cards[] = $card;
    }

    public function addPlayer(Player $player): void
    {
        $this->players[] = $player;
    }

    public function getPlayers(): array
    {
        return $this->players;
    }

    public function doRound()
    {
        switch($this->round) {
            case 1:
                break;
            case 2:
                break;
            case 3:
                break;
            default:
                die('Onbekend round nummer');
        }
    }
}
