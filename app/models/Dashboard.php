<?php namespace app\models;
use app\core\Database as Database;

class Dashboard {
    private $name = 'clarksye';

    public function getUser()
    {
        return $this->name;
    }
}