<?php

namespace Blackjack\game1;


class Hand
{
    public $p1Card1;
    public $p2Card1;
    public $p1Card2;
    public $p2Card2;

    /**
     * Takes the shuffled $deck and deals a new Hand from the top 4 cards.
     *
     * @param array $shuffledDeck is where $p1Card1 - $p2Card2 are to be 'dealt' from.
     *
     * @return array $hand contains the 4 cards drawn.
     */
    public function drawHand(array $shuffledDeck) : array
    {
        $this->p1Card1 = array_pop($shuffledDeck);
        $this->p2Card1 = array_pop($shuffledDeck);
        $this->p1Card2 = array_pop($shuffledDeck);
        $this->p2Card2 = array_pop($shuffledDeck);
        $hand = [$this->p1Card1, $this->p2Card1, $this->p1Card2, $this->p2Card2];
        return $hand;
    }
}
