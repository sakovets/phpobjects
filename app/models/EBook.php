<?php

/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 18.09.2018
 * Time: 18:53
 */
require_once 'base.php';
require_once 'Publisher.php';
require_once 'IInfo.php';


class EBook extends Base implements  IInfo {
    use Publisher;

    public $autor;
    public $fileSize;

    public function __construct($price, $title, $autor, $fileSize, $pages, $publisher, $year) {
        parent::__construct($price, $title);
        $this->autor = $autor;
        $this->fileSize = $fileSize;
        $this->pages = $pages;
        $this->publisher = $publisher;
        $this->year = $year;
    }
    public function preview() {
        echo "public function preview<br>";
    }
    public function info() {

        echo "<table border='1' width='20%'><tr><td>price</td><td>";
        echo "$this->price";
        echo "</td></tr><tr><td>title</td><td>";
        echo "$this->title";
        echo "</td></tr><tr><td>autor</td><td>";
        echo "$this->autor";
        echo "</td></tr><tr><td>fileSize</td><td>";
        echo "$this->fileSize";
        echo "</td></tr><tr><td>pages</td><td>";
        echo "$this->pages";
        echo "</td></tr><tr><td>publisher</td><td>";
        echo "$this->publisher";
        echo "</td></tr><tr><td>year</td><td>";
        echo "$this->year";
        echo "</td></tr></table><br>";
    }
}


