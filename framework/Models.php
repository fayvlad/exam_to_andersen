<?php
namespace framework;

class Model
{
    public function __construct()
    {
        $this->db = new Database();
    }
}
