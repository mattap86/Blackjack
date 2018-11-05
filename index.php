<?php

/**
*            STEPS TO MAKING BLACKJACK:
* 1. Make a deck of cards.
* 2. Make players 1 & 2 with scorecards.
* 3. Deal cards by removing a card from the deck and
*    giving it to the appropriate player.
* 4. Repeat until each player has 2 cards.
* 5. Show who's won.
* 6. Turn it all into functions.
*/

require_once 'php/function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BLACKJACK</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
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
                    <img src="images/<?php echo $card2['card']; ?>"/>
                </div>
                <div class="playerName">
                    <p>DEALER</p>
                </div>
                <div class="cardHolder dealerCardHolder2">
                    <img src="images/<?php echo $card4['card']; ?>"/>
                </div>
                <div class="cardHolder playerCardHolder1">
                    <img src="images/<?php echo $card1['card']; ?>"/>
                </div>
                <div class="cardHolder playerCardHolder2">
                    <img src="images/<?php echo $card3['card']; ?>"/>
                </div>
            </div>
            <div class="results">
                <div class="playerScore">
                    <p><b>DEALER SCORE:</b></p>
                    <p><?php echo '<br>' . $dealer; ?></p>
                </div>
                <div class="dealerScore">
                    <p><b>PLAYER SCORE:</b></p>
                    <p> <?php echo '<br>' . $you; ?></p>
                </div>
                <div class="winner">
                    <p><b><?php echo $winner; ?></b></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>