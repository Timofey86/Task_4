<?php

namespace app;

class Send_Message
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
        mysqli_query($this->db, "INSERT INTO `users` (`id`, `full_name`, `message`) VALUES (NULL, '$this->full_name', '$this->message')");
    }
}