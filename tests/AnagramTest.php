<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_check_1()
        {
            //Arrange
            $test_check = new Anagram;
            $input =;

            //Act
            $result = $test_check->check($input);

            //Assert
            $this->assertEquals(, $result);
        }

        function test_check_2()
        {
            //Arrange
            $test_check = new Anagram;
            $input = ;

            //Act
            $result = $test_check->check($input);

            //Assert
            $this->assertEquals(, $result);
        }
    }
 ?>