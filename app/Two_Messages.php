<?php

namespace app;

class Two_Messages
{
    private $full_name;
    private $db;
    private $commentNewCount;

    public function __construct($full_name,$db,$commentNewCount)
    {
        $this->full_name = $full_name;
        $this->db = $db;
        $this->commentNewCount = $commentNewCount;
    }

    public function getTwoMessages()
    {
        $query = "SELECT * FROM `users` WHERE `full_name` = '$this->full_name' LIMIT $this->commentNewCount";
        return mysqli_query($this->db,$query);
    }

}
// LIMIT $this->commentNewCount