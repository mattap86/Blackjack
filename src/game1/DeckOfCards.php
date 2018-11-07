<?php

namespace Blackjack\game1;


class DeckOfCards
{
    public $deck = [];

    /**
     * Takes the instantiated Card objects to form the array $deck
     *
     * @param array $cards contains all instantiated Cards
     */
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

    /**
     * Shuffles the array of the current $deck
     *
     * @return array $shuffledDeck is a shuffled array of the current $deck
     */
    public function shuffleDeck() : array
    {
        $shuffledDeck = shuffle($this->deck);
        return $shuffledDeck;
    }
}
