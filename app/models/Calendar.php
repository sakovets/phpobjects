<?php

/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 20.09.2018
 * Time: 10:37
 */
require_once 'base.php';
require_once 'IInfo.php';
require_once 'Size.php';

class Calendar extends Base implements  IInfo{
    public $year;
    public $type;
    public $size = array();

    public function __construct($price, $tittle, $year, $type, $size) {
        parent::__construct($price, $tittle);
        $this->year = $year;
        $this->type = $type;
        $this->size;
    }

    public function info() {
        echo "<table border='1' width='20%'><tr><td>price</td><td>";
        echo "$this->price";
        echo "</td></tr><tr><td>title</td><td>";
        echo "$this->title";
        echo "</td></tr><tr><td>year</td><td>";
        echo "$this->year";
        echo "</td></tr><tr><td>type</td><td>";
        echo "$this->type";
        echo "</td></tr><tr><td>size</td><td>";
        $comma_size = implode(", ", $this->size);
        echo "$comma_size";
        echo "</td></tr></table><br>";
    }
}