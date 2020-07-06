<?php

class Mailer
{
    public function sendMail($email, $message)
    {
        sleep(3);
        echo "send '$message' to '$email'";
        return true;
    }
}
