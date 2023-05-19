<?php
require_once 'models/product.php';

$p = new product ();
$p ->id = "1";
$p->description = "Exo";
$p->mark = "Notebook";
$p->price = 1000;
$p->urlImage = "http://image.com";

$p -> allTheProduct();