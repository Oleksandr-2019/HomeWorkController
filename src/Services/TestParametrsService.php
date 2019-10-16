<?php


namespace App\Services;

class TestParametrsService
{
    private $name;

    // Getters
    public function getUsername()
    {
        return $this->name;
    }

    // Setters
    public function setName($name)
    {
        $this->name = $name;
    }

}
