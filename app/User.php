<?php

namespace OOP;

class User{
    private $model;
    private $brand;
    private $price;
    private $weight;
    private $engine;
    private $speed;
    private $info;
    private $seats;

    public function __construct($model, $brand){
        $this->model = $model;
        $this->brand = $brand;

    }
    public function show(){
        $data [] = $this->brand;
        $data [] = $this->model;

        return $data;
    }
    public function addPrice($price){
        $this->price = $price;
    }
    public function showPrice()
    {
        $priceInfo = $this->price;

        return $priceInfo;
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