<?php

namespace OOP;

class User{
    protected $model;
    protected $brand;
    protected $price;
    protected $weight;
    protected $engine;
    protected $speed;
    protected $info;
    protected $seats;

    public function __construct($model, $brand){
        $this->model = $model;
        $this->brand = $brand;

    }
    public function profile(){
        $data [] = $this->brand;
        $data [] = $this->model;

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
    public function addWeight($weight){
        $this->weight = $weight;
    }
    public function showWeight()
    {
        $weightInfo = $this->weight;

        return $weightInfo;
    }
    public function addEngine($engine){
        $this->engine = $engine;
    }
    public function showEngine()
    {
        $engineInfo = $this->engine;

        return $engineInfo;
    }
    public function addSpeed($speed){
        $this->speed = $speed;
    }
    public function showSpeed()
    {
        $speedInfo = $this->speed;

        return $speedInfo;
    }
    public function addInfo($info){
        $this->info = $info;
    }
    public function showInfo()
    {
        $infoInfo = $this->info;

        return $infoInfo;
    }
    public function addSeats($seats){
        $this->seats = $seats;
    }
    public function showSeats()
    {
        $seatsInfo = $this->seats;

        return $seatsInfo;
    }
}