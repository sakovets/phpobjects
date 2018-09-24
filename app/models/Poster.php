<?php

/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 20.09.2018
 * Time: 10:08
 */
require_once 'base.php';
require_once 'IInfo.php';
require_once 'Size.php';

class Poster extends Base implements  IInfo{
    public $type;
    public $series;
    public $size = array();

    public function __construct($price, $title, $type, $series, $size) {
        parent::__construct($price, $title);
        $this->type = $type;
        $this->series = $series;
        $this->size;


    }
    public function customize(){
        echo "public function customize()<br>";
    }

    public function info() {
        echo "<table border='1' width='20%'><tr><td>price</td><td>";
        echo "$this->price";
        echo "</td></tr><tr><td>title</td><td>";
        echo "$this->title";
        echo "</td></tr><tr><td>type</td><td>";
        echo "$this->type";
        echo "</td></tr><tr><td>series</td><td>";
        echo "$this->series";
        echo "</td></tr><tr><td>size</td><td>";
        $comma_size = implode(", ", $this->size);
        echo "$comma_size";
        echo "</td></tr></table><br>";
    }
}