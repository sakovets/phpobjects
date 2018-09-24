<?php

/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 18.09.2018
 * Time: 19:01
 */
require_once 'base.php';
require_once 'Publisher.php';
require_once 'IInfo.php';
require_once 'Size.php';

class Book extends Base implements  IInfo {
    use Publisher;

    public $hardcover;
    public $autor;
    public $genres = array();
    public $size = array();

    public function __construct($price, $tittle, $autor, $hardcover, $pages, $publisher, $year, $genres, $size) {
        parent::__construct($price, $tittle);
        $this->autor = $autor;
        $this->hardcover = $hardcover;
        $this->pages = $pages;
        $this->publisher = $publisher;
        $this->year = $year;
        $this->genres = $genres;
        $this->size = $size;
    }

    public function reserve() {
        echo "public function reserve<br>";
    }

    public function getGernes(){
        $comma_genres = implode(",", $this->genres);
        echo $comma_genres;
    }

    public function info() {

        echo "<table border='1' width='20%'><tr><td>price</td><td>";
        echo "$this->price";
        echo "</td></tr><tr><td>title</td><td>";
        echo "$this->title";
        echo "</td></tr><tr><td>autor</td><td>";
        echo "$this->autor";
        echo "</td></tr><tr><td>hardcover</td><td>";
        echo "$this->hardcover";
        echo "</td></tr><tr><td>pages</td><td>";
        echo "$this->pages";
        echo "</td></tr><tr><td>publisher</td><td>";
        echo "$this->publisher";
        echo "</td></tr><tr><td>year</td><td>";
        echo "$this->year";
        echo "</td></tr><tr><td>genres</td><td>";
        $comma_genres = implode(", ", $this->genres);
        echo $comma_genres;
        echo "</td></tr><tr><td>size</td><td>";
        $comma_size = implode(", ", $this->size);
        echo "$comma_size";
        echo "</td></tr></table><br>";
    }

}


$nb = new Book(25,'yyy', 'ttt', 'yes',50, 'rtyt', 2014, ['fan', 'pan'], ['230', '360']);
$nb->info();

