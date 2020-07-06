<?php
use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
    public function testMock()
    {
        $mock = $this->createMock(Mailer::class);
        $mock->method('sendMail')
            ->willReturn(true);
        $result = $mock->sendMail('rishi.h@mailiantor.com', 'This is test msg');
        $this->assertTrue($result);
    }
}
