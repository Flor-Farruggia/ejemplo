<?php
//acá van las clases, se creará un avm de producto

class product {
    public $id;
    public $description;
    public $mark;
    public $price;
    public $urlImage;

    public function allTheProduct(){
        echo 'id: '.$this->id;
        echo '<br> Description: '.$this->description;
        echo '<br> Mark: '.$this->mark;
        echo '<br> Price: '.$this->price;
        echo '<br> image: '.$this->urlImage;
    }
}

