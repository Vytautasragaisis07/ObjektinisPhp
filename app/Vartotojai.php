<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 15:15
 */

namespace OOP;


abstract class Vartotojai
{
    protected $name;
    protected $email;
    protected $phone;

    abstract public function __construct($name, $email, $phone){
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;

    }
    abstract function addComment($comment){
        $this->comment = $comment;
    }
    abstract public function showComment()
    {
        $commentInfo = $this->comment;

        return $commentInfo;
    }
}
}