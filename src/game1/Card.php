<?php

namespace Blackjack\game1;


class Card
{
    public $cardImage;
    public $value;

    public function __construct($cardImage, $value)
    {
        $this->cardImage = $cardImage;
        $this->value = $value;
    }
}
