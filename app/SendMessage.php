<?php

namespace app;

class SendMessage
{
    private $full_name;
    private $message;
    private $db;

    public function __construct($db, $full_name, $message)
    {
        $this->db = $db;
        $this->full_name = $full_name;
        $this->message = $message;
    }

    public function sendToDataBase()
    {
        mysqli_query($this->db, "INSERT INTO `feedback` (`id`, `full_name`, `message`) VALUES (NULL, '$this->full_name', '$this->message')");
    }
}