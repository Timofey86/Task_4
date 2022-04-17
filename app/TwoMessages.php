<?php

namespace app;

class Two_Messages
{
    private $db;
    private $commentNewCount;

    public function __construct($db,$commentNewCount)
    {
        $this->db = $db;
        $this->commentNewCount = $commentNewCount;
    }

    public function getTwoMessages()
    {
        $query = "SELECT * FROM `feedback` ORDER BY id DESC LIMIT $this->commentNewCount";
        return mysqli_query($this->db,$query);
    }
}
