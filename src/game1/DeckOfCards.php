<?php

namespace Blackjack\game1;


class DeckOfCards
{
    public $deck = [];

    public function createDeck(array $cards)
    {
        foreach ($cards as $card)
        {
            if ($card instanceof Card)
            {
                array_push($this->deck, $card);
            }
        }
    }

    public function shuffleDeck() : array
    {
        $shuffledDeck = shuffle($this->deck);
        return $shuffledDeck;
    }
}
