<?php

    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_returnOne()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 1;

            //Act
            $result = $test_PingPongGenerator->makePingPong($input);

            //Assert
            $this->assertEquals(array(1), $result);
        }
        function test_returnMultpile()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 5;

            //Act
            $result = $test_PingPongGenerator->makePingPong($input);

            //Assert
            $this->assertEquals(array(1, 2, 3, 4, 5), $result);
        }


    }



        // function test_makePingPong_three()
        // {
        //     //Arrange
        //     $test_PingPongGenerator = new PingPongGenerator;
        //     $input = 4;
        //     //Act
        //     $result = $test_PingPongGenerator->makePingPong($input);
        //     //Assert
        //     $this->assertEquals("1 2 ping 4 ", $result);
        // }



?>
