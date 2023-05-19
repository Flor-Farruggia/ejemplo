<?php
//acá van las clases, se creará un avm de producto

class Producto {
    public $id;
    public $description;
    public $mark;
    public $price;
    public $urlImage;

    public function allTheProduct(){
        echo 'id: '.$this->id.<br>;
        echo 'Description: '.$this->description.<br>;
        echo 'Mark: '.$this->$mark.<br>;
        echo 'Price: '.$this->price.<br>;
        echo 'image: '.$this->urlImage.<br>;
    }
}

