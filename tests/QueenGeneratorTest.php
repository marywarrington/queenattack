<?php

    require_once "src/QueenGenerator.php";

    class QueenTest extends PHPUnit_Framework_TestCase
    {
        function test_findX()
        {
            //Arrange
            $test_Queen = new Queen;
            $pieceX = 3;

            //Act
            $result = $test_Queen->makeQueenAttack($pieceX);

            //Assert
            $this->assertEquals(true, $result);
        }

    }

?>
