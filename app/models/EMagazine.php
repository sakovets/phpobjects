<?php

/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 18.09.2018
 * Time: 19:52
 */
require_once 'base.php';
require_once 'Publisher.php';
require_once 'Number.php';
require_once 'IInfo.php';


class EMagazine extends Base implements  IInfo{
    use Publisher;
    use Number;

    public $fileSize;
    private $SubscriptionPrice;

    public function getSubscriptionPrice($sale){
        if($sale == 0){
            $saleSum = $this->price * ($sale / 100);
            $money = $this->price -$saleSum;
            $moneySubscription = $money * $this->numsPerYear;
            echo "discounted Subscription price  $moneySubscription <br><br>";
        }
        else{
            $saleSubscription = $this->SubscriptionPrice * ($sale / 100);
            $subscriptionMoney = $this->SubscriptionPrice - $saleSubscription;
            echo "discounted Subscription price  $subscriptionMoney <br><br>";
        }
    }
    public function setSubscriptionPrice($sale){


    }
    public function __construct($price, $tittle, $fileSize, $pages, $publisher, $year, $number, $numsPerYear, $SubscriptionPrice) {
        parent::__construct($price, $tittle);
        $this->fileSize = $fileSize;
        $this->pages = $pages;
        $this->publisher = $publisher;
        $this->year = $year;
        $this->number = $number;
        $this->numsPerYear = $numsPerYear;
        $this->SubscriptionPrice = $SubscriptionPrice;

    }
    public function preview() {
        echo "public function preview<br>";
    }
    public function info() {

        echo "<table border='1' width='20%'><tr><td>price</td><td>";
        echo "$this->price";
        echo "</td></tr><tr><td>title</td><td>";
        echo "$this->title";
        echo "</td></tr><tr><td>fileSize</td><td>";
        echo "$this->fileSize";
        echo "</td></tr><tr><td>pages</td><td>";
        echo "$this->pages";
        echo "</td></tr><tr><td>publisher</td><td>";
        echo "$this->publisher";
        echo "</td></tr><tr><td>year</td><td>";
        echo "$this->year";
        echo "</td></tr><tr><td>number</td><td>";
        echo "$this->number";
        echo "</td></tr><tr><td>numsPerYear</td><td>";
        echo "$this->numsPerYear";
        echo "</td></tr><tr><td>SubscriptionPrice</td><td>";
        echo "$this->SubscriptionPrice";
        echo "</td></tr></table><br>";
    }

}