<?php

    class Queen
    {
        function makeQueenAttack($pieceX, $pieceY)
        {
            // $queenX = 3;
            // $queenY = 3;
            if ($queenX == $pieceX || $queenY == $pieceY || abs($queenY - $pieceY) == abs($queenX - $pieceX)) {
                return true;
                }
        }

    }
 ?>
