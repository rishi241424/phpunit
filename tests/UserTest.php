<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testFullName()
    {
        $user = new User('rishi', 'hardia');
        $this->assertEquals('rishi hardia', $user->getFullName());
    }
    /**
     * This is Notification Unit Test
     * adding comment 3
     * Adding Feature 3 Branch code
     */
    public function testNotificationIsSent()
    {
        $user = new User;
        $mockMailer = $this->createMock(Mailer::class);
        $mockMailer->method('sendMail')
            ->willReturn(true);
        $user->setMailer($mockMailer);
        $user->email = 'rishi.h@mailinator.com';
        $this->assertTrue($user->notify('This is test msg'));
    }
}
