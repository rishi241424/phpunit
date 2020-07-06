<?php

class User
{
    public $firstname;
    public $lastname;
    public $email;
    public $mailer;

    public function setMailer(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
    public function __construct($firstname = "", $lastname = "")
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function getFullName()
    {
        return "$this->firstname $this->lastname";
    }

    public function notify($mesage)
    {
        return $this->mailer->sendMail($this->email, $mesage);
    }
}
