<?php

class Fruit {

    private $name;
    private $color;
    private $type;

/*     public function __construct($name, $color, $type) {
        $this->name = $name;
        $this->color = $color;
        $this->type = $type;
    } */


    function set_name($name) {
        $this ->name = $name;
    }


    function get_name() {
        return $this->name;

    }

    function set_color($color) {
        $this->color = $color;
    }

    function get_color() {
        return $this->color;
    }

    function set_type($type) {
        return $this->type; 
    }

    function get_type() {
        return $this->type;
    }


}

/* $apple = new Fruit("Fint äpple", "Röd", "Äpple");
$banana = new Fruit("Fin banan", "Gul", "Banan"); */


$apple = new Fruit();
$apple->set_name("Fint Äpple");
$apple->set_color("Röd");
$apple->set_type("Äpple");

$banana = new Fruit();
$banana->set_name("Fin banan");
$banana->set_color("Gul");
$banana->set_type("Banan");


echo $apple->get_name() . " " . $apple->get_color() . " " . $apple->get_type() . "<br>";
echo $banana->get_name() . " " . $banana->get_color() . " " . $banana->get_type();




?>