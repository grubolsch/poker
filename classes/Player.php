<?php

class Player
{
    private string $name;
    private int $balance;
    private array $cards = [];
    private Role $role;
    private int $bet = 0;

    public function __construct(string $name, int $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
        $this->role = new Role;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }

    public function setBalance(int $balance): void
    {
        $this->balance = $balance;
    }

    /** @return Card[] */
    public function getCards(): array
    {
        return $this->cards;
    }

    public function addCard(Card $card): void
    {
        $this->cards[] = $card;
    }

    public function getRole(): Role
    {
        return $this->role;
    }

    public function setRole(Role $role): void
    {
        $this->role = $role;
    }

    public function getBet(): int
    {
        return $this->bet;
    }

    public function setBet(int $bet): void
    {
        $this->bet = $bet;
    }
}
