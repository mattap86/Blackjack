<?php

use PHPUnit\Framework\TestCase;

require('../index.php');

class StackTest extends TestCase
{

    //success
//    public function testDealSuccessSame($deck)
//    {
//        $expected = [];
//        $actual = [];
//        $this->assertSame($expected, $actual);
//    }

//    //failure
//    public function testDealFailure($deck)
//    {
//        $card1 = array_pop($deck);
//        $card2 = array_pop($deck);
//        $card3 = array_pop($deck);
//        $card4 = array_pop($deck);
//        $dealtCards = [$card1, $card2, $card3, $card4];
//        return $dealtCards;
//    }


    //success
    public function testHandTotalSuccess()
    {
        $card1 = array('suit' => 'hearts', 'face' => 'sever', 'value' => 7);
        $card2 = array('suit' => 'spades', 'face' => 'ace', 'value' => 11);
        $expected = 18;
        $input = $card1;
        $input2 = $card2;
        $case = handTotal($input, $input2);
        $this->assertEquals($case, $expected);
    }

    //success
    public function testHandTotalSuccess2()
    {
        $card1 = array('suit' => 'hearts', 'face' => 'queen', 'value' => 10);
        $card2 = array('suit' => 'spades', 'face' => 'two', 'value' => 2);
        $expected = 12;
        $input = $card1;
        $input2 = $card2;
        $case = handTotal($input, $input2);
        $this->assertEquals($case, $expected);
    }

    //failure
    public function testHandTotalFailure_juggling()
    {
        $card1 = array('suit' => 'hearts', 'face' => 'seven', 'value' => '7');
        $card2 = array('suit' => 'spades', 'face' => 'ace', 'value' => '11');
        $expected = 18;
        $input = $card1;
        $input2 = $card2;
        $case = handTotal($input, $input2);
        $this->assertEquals($case, $expected);
    }

    //failure
    public function testHandTotalFailure_juggling2()
    {
        $card1 = array('suit' => 'hearts', 'face' => 'queen', 'value' => '10');
        $card2 = array('suit' => 'spades', 'face' => 'two', 'value' => '2');
        $expected = 12;
        $input = $card1;
        $input2 = $card2;
        $case = handTotal($input, $input2);
        $this->assertEquals($case, $expected);
    }


    //success
//    function testCalculateWinnerSuccessSame(int $you, int $dealer): string
//    {
//        $expected = $winner->calculateWinner;
//        $actual = $winner->calculateWinner;
//        $this->assertSame($expected, $actual);
//    }
}

