<?php

namespace Blackjack\game1;


class Hand
{
    public $p1Card1;
    public $p2Card1;
    public $p1Card2;
    public $p2Card2;

    public function drawHand(array $shuffledDeck)
    {
        $this->p1Card1 = array_pop($shuffledDeck);
        $this->p2Card1 = array_pop($shuffledDeck);
        $this->p1Card2 = array_pop($shuffledDeck);
        $this->p2Card2 = array_pop($shuffledDeck);
    }
}
