

<?php

/**
*            STEPS TO MAKING BLACKJACK:
* 1. Make a deck of cards.
* 2. Make players 1 & 2 with scorecards.
* 3. Deal cards by removing a card from the deck and
*    giving it to the appropriate player.
* 4. Repeat for 2 cards per player.
* 5. Show who's won.
* 6. Turn it all into functions.
*/

//a set of variables with images associated to then display on dealing
$twoOfSpades = 'cardDeck/2S.png';
$threeOfSpades = 'cardDeck/3S.png';
$fourOfSpades = 'cardDeck/4S.png';
$fiveOfSpades = 'cardDeck/5S.png';
$sixOfSpades = 'cardDeck/6S.png';
$sevenOfSpades = 'cardDeck/7S.png';
$eightOfSpades = 'cardDeck/8S.png';
$nineOfSpades = 'cardDeck/9S.png';
$tenOfSpades = 'cardDeck/10S.png';
$jackOfSpades = 'cardDeck/JS.png';
$queenOfSpades = 'cardDeck/QS.png';
$kingOfSpades = 'cardDeck/KS.png';
$aceOfSpades = 'cardDeck/AS.png';

$twoOfHearts = 'cardDeck/2H.png';
$threeOfHearts = 'cardDeck/3H.png';
$fourOfHearts = 'cardDeck/4H.png';
$fiveOfHearts = 'cardDeck/5H.png';
$sixOfHearts = 'cardDeck/6H.png';
$sevenOfHearts = 'cardDeck/7H.png';
$eightOfHearts = 'cardDeck/8H.png';
$nineOfHearts = 'cardDeck/9H.png';
$tenOfHearts = 'cardDeck/10H.png';
$jackOfHearts = 'cardDeck/JH.png';
$queenOfHearts = 'cardDeck/QH.png';
$kingOfHearts = 'cardDeck/KH.png';
$aceOfHearts = 'cardDeck/AH.png';

$twoOfClubs = 'cardDeck/2C.png';
$threeOfClubs = 'cardDeck/3C.png';
$fourOfClubs = 'cardDeck/4C.png';
$fiveOfClubs = 'cardDeck/5C.png';
$sixOfClubs = 'cardDeck/6C.png';
$sevenOfClubs = 'cardDeck/7C.png';
$eightOfClubs = 'cardDeck/8C.png';
$nineOfClubs = 'cardDeck/9C.png';
$tenOfClubs = 'cardDeck/10C.png';
$jackOfClubs = 'cardDeck/JC.png';
$queenOfClubs = 'cardDeck/QC.png';
$kingOfClubs = 'cardDeck/KC.png';
$aceOfClubs = 'cardDeck/AC.png';

$twoOfDiamonds = 'cardDeck/2D.png';
$threeOfDiamonds = 'cardDeck/3D.png';
$fourOfDiamonds = 'cardDeck/4D.png';
$fiveOfDiamonds = 'cardDeck/5D.png';
$sixOfDiamonds = 'cardDeck/6D.png';
$sevenOfDiamonds = 'cardDeck/7D.png';
$eightOfDiamonds = 'cardDeck/8D.png';
$nineOfDiamonds = 'cardDeck/9D.png';
$tenOfDiamonds = 'cardDeck/10D.png';
$jackOfDiamonds = 'cardDeck/JD.png';
$queenOfDiamonds = 'cardDeck/QD.png';
$kingOfDiamonds = 'cardDeck/KD.png';
$aceOfDiamonds = 'cardDeck/AD.png';

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
function deal($deck) {
    $card1 = array_pop($deck);
    $card2 = array_pop($deck);
    $card3 = array_pop($deck);
    $card4 = array_pop($deck);
    $dealtCards = [$card1, $card2, $card3, $card4];
    return $dealtCards;
}

$dealtCards = deal($deck);

$card1 = $dealtCards[0];
$card2 = $dealtCards[1];
$card3 = $dealtCards[2];
$card4 = $dealtCards[3];

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

$you = handTotal($card1, $card3);

$dealer = handTotal($card2, $card4);

echo "You scored: " . $you . "<br>";

echo "Dealer scored: " . $dealer . "<br>";

/**
 * calculates the winner of the hand just player.
 *
 * @param $you int is the total value of player 'you's' cards from the hand just played.
 * @param $dealer int is the total value of player 'dealer's' cards from the hand just played.
 *
 * @return string is a conditional statement on the outcome of the hand.
 */
function calculateWinner(int $you, int $dealer) : string {
    if ($you == 21) {
        return 'blackjack';
    } elseif ($you < 22 && $you > $dealer) {
        return 'you';
    } elseif ($you < 21 && $you == $dealer) {
        return 'draw';
    } else {
        return 'dealer';
    }
}

$winner = calculateWinner($you, $dealer);

// The result
if ($winner == 'blackjack') {
    echo "BLACKJACK! YOU WIN!!";
} elseif ($winner == 'you') {
    echo "YOU WIN!!";
} elseif ($winner =='draw') {
    echo "DRAW";
} elseif ($winner == 'dealer') {
    echo "YOU LOSE";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BLACKJACK</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="tableRim">
        <div class="table">
            <div class="deckHolderBorder">
                <div class="deckHolder">
                    <div class="deck"></div>
                </div>
            </div>
            <div class="cardHolders">
                <div class="cardHolder dealerCardHolder1">
                    <img src="<?php echo $card2['card']; ?>"/>
                </div>
                <div class="cardHolder dealerCardHolder2">
                    <img src="<?php echo $card4['card']; ?>"/>
                </div>
                <div class="cardHolder playerCardHolder1">
                    <img src="<?php echo $card1['card']; ?>"/>
                </div>
                <div class="cardHolder playerCardHolder2">
                    <img src="<?php echo $card3['card']; ?>"/>
                </div>
            </div>
            <div class="results">
                <div class="playerScore">
                    <p><b>PLAYER SCORE:</b></p>
                    <p><?php echo $you; ?></p>
                </div>
                <div class="dealerScore">
                    <p><b>DEALER SCORE:</b></p>
                    <p> <?php echo $dealer; ?></p>
                </div>
                <div class="winner">
                    <p><b><?php echo $winner; ?></b></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>