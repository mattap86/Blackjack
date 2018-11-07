<?php

namespace Blackjack\game1;


class Card
{
    public $cardImage;
    public $value;

    /**
     * Card constructor.
     *
     * @param string $cardImage is the image path that represents the instantiated card
     * @param int $value is the face value of the instantiated card
     */
    public function __construct(string $cardImage, int $value)
    {
        $this->cardImage = $cardImage;
        $this->value = $value;
    }
}
