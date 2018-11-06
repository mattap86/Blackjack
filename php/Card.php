<?php

class Card
{
    private $cardImage;
    private $value;

    public function __construct($cardImage, $value)
    {
        $this->cardImage = $cardImage;
        $this->value = $value;
    }

    public function getCard()
    {
        return $this->cardImage . $this->value;
    }
}
