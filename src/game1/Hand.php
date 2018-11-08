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
        if ($shuffledDeck instanceof DeckOfCards) {
            $this->p1Card1 = array_pop($shuffledDeck);
            $this->p2Card1 = array_pop($shuffledDeck);
            $this->p1Card2 = array_pop($shuffledDeck);
            $this->p2Card2 = array_pop($shuffledDeck);
        }
    }

    /**
     * Calculates total score of hand by combining the values of both cards
     *
     * @param array $card1 is the first value in the sum (dealt card no.1)
     * @param array $card2 is the second value in the sum (dealt card no.2)
     *
     * @return int $handTotal shows the sum of the parameters (shows hand total)
     */
    function handTotal(array $card1, array $card2) : int
    {
        $handTotal = $card1['value'] + $card2['value'];
        return $handTotal;
    }

    /**
     * calculates the winner of the hand just played
     *
     * @param $you int is the total value of player 'you's' cards from the hand just dealt
     * @param $dealer int is the total value of player 'dealer's' cards from the hand just dealt
     *
     * @return string is a conditional statement on the outcome of the hand
     */
    function calculateWinner(int $you, int $dealer) : string
    {
        if ($you == 21 && $dealer == 21) {
           return 'PUSH';
        } elseif ($you == 21 && $dealer !== 21) {
            return '!!!BLACKJACK!!!';
        } elseif ($you < 22 && $you > $dealer) {
            return '!!YOU WIN!!';
        } elseif ($you < 21 && $you == $dealer) {
            return 'DRAW';
        } else {
            return 'DEALER WINS';
        }
    }
}
