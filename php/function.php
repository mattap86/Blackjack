<?php

//a set of variables with values of image paths to be displayed on dealing
$cardFaces = [
    $twoOfSpades = 'cardDeck/2S.png', $threeOfSpades = 'cardDeck/3S.png', $fourOfSpades = 'cardDeck/4S.png',
    $fiveOfSpades = 'cardDeck/5S.png', $sixOfSpades = 'cardDeck/6S.png', $sevenOfSpades = 'cardDeck/7S.png',
    $eightOfSpades = 'cardDeck/8S.png', $nineOfSpades = 'cardDeck/9S.png', $tenOfSpades = 'cardDeck/10S.png',
    $jackOfSpades = 'cardDeck/JS.png', $queenOfSpades = 'cardDeck/QS.png', $kingOfSpades = 'cardDeck/KS.png',
    $aceOfSpades = 'cardDeck/AS.png', $twoOfHearts = 'cardDeck/2H.png', $threeOfHearts = 'cardDeck/3H.png',
    $fourOfHearts = 'cardDeck/4H.png', $fiveOfHearts = 'cardDeck/5H.png', $sixOfHearts = 'cardDeck/6H.png',
    $sevenOfHearts = 'cardDeck/7H.png', $eightOfHearts = 'cardDeck/8H.png', $nineOfHearts = 'cardDeck/9H.png',
    $tenOfHearts = 'cardDeck/10H.png', $jackOfHearts = 'cardDeck/JH.png', $queenOfHearts = 'cardDeck/QH.png',
    $kingOfHearts = 'cardDeck/KH.png', $aceOfHearts = 'cardDeck/AH.png', $twoOfClubs = 'cardDeck/2C.png',
    $threeOfClubs = 'cardDeck/3C.png', $fourOfClubs = 'cardDeck/4C.png', $fiveOfClubs = 'cardDeck/5C.png',
    $sixOfClubs = 'cardDeck/6C.png', $sevenOfClubs = 'cardDeck/7C.png', $eightOfClubs = 'cardDeck/8C.png',
    $nineOfClubs = 'cardDeck/9C.png', $tenOfClubs = 'cardDeck/10C.png', $jackOfClubs = 'cardDeck/JC.png',
    $queenOfClubs = 'cardDeck/QC.png', $kingOfClubs = 'cardDeck/KC.png', $aceOfClubs = 'cardDeck/AC.png',
    $twoOfDiamonds = 'cardDeck/2D.png', $threeOfDiamonds = 'cardDeck/3D.png', $fourOfDiamonds = 'cardDeck/4D.png',
    $fiveOfDiamonds = 'cardDeck/5D.png', $sixOfDiamonds = 'cardDeck/6D.png', $sevenOfDiamonds = 'cardDeck/7D.png',
    $eightOfDiamonds = 'cardDeck/8D.png', $nineOfDiamonds = 'cardDeck/9D.png', $tenOfDiamonds = 'cardDeck/10D.png',
    $jackOfDiamonds = 'cardDeck/JD.png', $queenOfDiamonds = 'cardDeck/QD.png', $kingOfDiamonds = 'cardDeck/KD.png',
    $aceOfDiamonds = 'cardDeck/AD.png',
    ];

// the deck of cards, arrayed as individual cards valued by card and value
$deck = [
    ['card' => $twoOfSpades, 'value' => 2],
    ['card' => $threeOfSpades, 'value' => 3],
    ['card' => $fourOfSpades, 'value' => 4],
    ['card' => $fiveOfSpades, 'value' => 5],
    ['card' => $sixOfSpades, 'value' => 6],
    ['card' => $sevenOfSpades, 'value' => 7],
    ['card' => $eightOfSpades, 'value' => 8],
    ['card' => $nineOfSpades, 'value' => 9],
    ['card' => $tenOfSpades, 'value' => 10],
    ['card' => $jackOfSpades, 'value' => 10],
    ['card' => $queenOfSpades, 'value' => 10],
    ['card' => $kingOfSpades, 'value' => 10],
    ['card' => $aceOfSpades, 'value' => 11],
    ['card' => $twoOfHearts, 'value' => 2],
    ['card' => $threeOfHearts, 'value' => 3],
    ['card' => $fourOfHearts, 'value' => 4],
    ['card' => $fiveOfHearts, 'value' => 5],
    ['card' => $sixOfHearts, 'value' => 6],
    ['card' => $sevenOfHearts, 'value' => 7],
    ['card' => $eightOfHearts, 'value' => 8],
    ['card' => $nineOfHearts, 'value' => 9],
    ['card' => $tenOfHearts, 'value' => 10],
    ['card' => $jackOfHearts, 'value' => 10],
    ['card' => $queenOfHearts, 'value' => 10],
    ['card' => $kingOfHearts, 'value' => 10],
    ['card' => $aceOfHearts, 'value' => 11],
    ['card' => $twoOfClubs, 'value' => 2],
    ['card' => $threeOfClubs, 'value' => 3],
    ['card' => $fourOfClubs, 'value' => 4],
    ['card' => $fiveOfClubs, 'value' => 5],
    ['card' => $sixOfClubs, 'value' => 6],
    ['card' => $sevenOfClubs, 'value' => 7],
    ['card' => $eightOfClubs, 'value' => 8],
    ['card' => $nineOfClubs, 'value' => 9],
    ['card' => $tenOfClubs, 'value' => 10],
    ['card' => $jackOfClubs, 'value' => 10],
    ['card' => $queenOfClubs, 'value' => 10],
    ['card' => $kingOfClubs, 'value' => 10],
    ['card' => $aceOfClubs, 'value' => 11],
    ['card' => $twoOfDiamonds, 'value' => 2],
    ['card' => $threeOfDiamonds, 'value' => 3],
    ['card' => $fourOfDiamonds, 'value' => 4],
    ['card' => $fiveOfDiamonds, 'value' => 5],
    ['card' => $sixOfDiamonds, 'value' => 6],
    ['card' => $sevenOfDiamonds, 'value' => 7],
    ['card' => $eightOfDiamonds, 'value' => 8],
    ['card' => $nineOfDiamonds, 'value' => 9],
    ['card' => $tenOfDiamonds, 'value' => 10],
    ['card' => $jackOfDiamonds, 'value' => 10],
    ['card' => $queenOfDiamonds, 'value' => 10],
    ['card' => $kingOfDiamonds, 'value' => 10],
    ['card' => $aceOfDiamonds, 'value' => 11],
];

// Shuffles deck
shuffle($deck);

/**
 * Takes the shuffled deck and deals a new hand from the top 4 cards.
 *
 * @param $deck array is the array that $card1 - $card4 are to be 'dealt' from.
 *
 * @return array is the array containing the 4 cards drawn.
 */
function deal(array $deck) : array {
    $card1 = array_pop($deck);
    $card2 = array_pop($deck);
    $card3 = array_pop($deck);
    $card4 = array_pop($deck);
    $hand = [$card1, $card2, $card3, $card4];
    return $hand;
}

/**
 * calculates total score of hand by combining the values of both cards.
 *
 * @param $card1 array is the first value in the sum (dealt card no.1).
 * @param $card2 array is the second value in the sum (dealt card no.2).
 *
 * @return int shows the sum of the parameters (shows hand total).
 */
function handTotal(array $card1, array $card2) : int {
    return $card1['value'] + $card2['value'];
}

/**
 * calculates the winner of the hand just player.
 *
 * @param $you int is the total value of player 'you's' cards from the hand just dealt.
 * @param $dealer int is the total value of player 'dealer's' cards from the hand just dealt.
 *
 * @return string is a conditional statement on the outcome of the hand.
 */
function calculateWinner(int $you, int $dealer) : string {
    if ($you == 21) {
        return 'BLACKJACK!!!!';
    } elseif ($you < 22 && $you > $dealer) {
        return 'YOU WIN!!!';
    } elseif ($you < 21 && $you == $dealer) {
        return 'DRAW';
    } else {
        return 'DEALER WINS';
    }
}

$dealtCards = deal($deck);

$card1 = $dealtCards[0];
$card2 = $dealtCards[1];
$card3 = $dealtCards[2];
$card4 = $dealtCards[3];

$you = handTotal($card1, $card3);

$dealer = handTotal($card2, $card4);

$winner = calculateWinner($you, $dealer);
