<?php

    require_once "src/QueenGenerator.php";

    class QueenTest extends PHPUnit_Framework_TestCase
    {
        function test_findX()
        {
            //Arrange
            $test_Queen = new Queen;
            $pieceX = 3;
            $pieceY = 1;

            //Act
            $resultX = $test_Queen->makeQueenAttack($pieceX, $pieceY);

            //Assert
            $this->assertEquals(true, $resultX);
        }
        function test_findY()
        {
            //Arrange
            $test_Queen = new Queen;
            $pieceY = 3;
            $pieceX = 7;

            //Act
            $resultY = $test_Queen->makeQueenAttack($pieceX, $pieceY);

            //Assert
            $this->assertEquals(true, $resultY);
        }

    }

?>
