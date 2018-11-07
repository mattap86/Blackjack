<?php

abstract class Deck
{
    protected $arrCards;
    protected $listOfCards;
    
    abstract public function deal();

    public function __construct(array $cards)
    {
        $this->arrCards = $cards;
    }

    public function shuffleCards()
    {
        shuffle($this->arrCards);
    }

    public function getCards()
    {
        foreach ($this->arrCards as $card)
        {
            return $card;
        }
    }
}
