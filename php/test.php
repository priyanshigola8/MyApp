<?php

use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testHelloWorld()
    {
        // Capture the output of the code
        ob_start();
        include 'hello.php'; // Include the PHP file containing the "Hello, World!" code
        $output = ob_get_clean();

        // Assert that the output matches the expected string
        $this->assertEquals('Hello, World!', $output);
    }
}
