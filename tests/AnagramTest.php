<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_check_1()
        {
            //Arrange
            $test_check = new Anagram('br3ead');
            $input = 'bread';

            //Act
            $result = $test_check->check($input);

            //Assert
            $this->assertEquals('bread', $result);
        }

        function test_check_2()
        {
            //Arrange
            $test_check = new Anagram('bread');
            $input = 'Br3Ead';

            //Act
            $result = $test_check->check($input);

            //Assert
            $this->assertEquals('YESSIR', $result);
        }

        function test_check_3()
        {
            //Arrange
            $test_check = new Anagram('bread');
            $input = 'bE3Ard';

            //Act
            $result = $test_check->check($input);

            //Assert
            $this->assertEquals('YESSIR', $result);
        }

        function test_check_4()
        {
            //Arrange
            $test_check = new Anagram('bread');
            $input = 'bar';

            //Act
            $result = $test_check->check($input);

            //Assert
            $this->assertEquals('YESSIR', $result);
        }
    }
 ?>
