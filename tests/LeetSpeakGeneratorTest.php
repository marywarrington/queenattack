<?php

    require_once "src/LeetSpeakGenerator.php";

    class LeetSpeakGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_returnString()
        {
            //Arrange
            $test_LeetSpeakGenerator = new LeetSpeakGenerator;
            $input = "x";

            //Act
            $result = $test_LeetSpeakGenerator->makeLeetSpeak($input);

            //Assert
            $this->assertEquals("x", $result);
        }
        function test_replaceE()
        {
            //Arrange
            $test_LeetSpeakGenerator = new LeetSpeakGenerator;
            $input = "hell";

            //Act
            $result = $test_LeetSpeakGenerator->makeLeetSpeak($input);

            //Assert
            $this->assertEquals("h3ll", $result);
        }

        function test_replaceO()
        {
            //Arrange
            $test_LeetSpeakGenerator = new LeetSpeakGenerator;
            $input = "hello";

            //Act
            $result = $test_LeetSpeakGenerator->makeLeetSpeak($input);

            //Assert
            $this->assertEquals("h3ll0", $result);
        }

        function test_replaceI()
        {
            //Arrange
            $test_LeetSpeakGenerator = new LeetSpeakGenerator;
            $input = "Ice";

            //Act
            $result = $test_LeetSpeakGenerator->makeLeetSpeak($input);

            //Assert
            $this->assertEquals("1c3", $result);
        }

        function test_replaceS()
        {
            //Arrange
            $test_LeetSpeakGenerator = new LeetSpeakGenerator;
            $input = "dogs";

            //Act
            $result = $test_LeetSpeakGenerator->makeLeetSpeak($input);

            //Assert
            $this->assertEquals("d0gz", $result);
        }

        function test_replaceSpaceS()
        {
            //Arrange
            $test_LeetSpeakGenerator = new LeetSpeakGenerator;
            $input = "dogs speak";

            //Act
            $result = $test_LeetSpeakGenerator->makeLeetSpeak($input);

            //Assert
            $this->assertEquals("d0gz sp3ak", $result);
        }

    }

?>
