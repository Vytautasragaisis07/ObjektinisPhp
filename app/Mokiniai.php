<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 13:41
 */

namespace OOP;


class Mokiniai extends Bendruomene
{
    protected $name;
    protected $email;
    protected $phone;

    public function __construct($name, $email, $phone){
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;

    }
    public function profile(){
        $data [] = $this->name;
        $data [] = $this->email;
        $data [] = $this->phone;

        return $data;
    }
    public function addComment($comment){
        $this->comment = $comment;
    }
    public function showComment()
    {
        $commentInfo = $this->comment;

        return $commentInfo;
    }
}