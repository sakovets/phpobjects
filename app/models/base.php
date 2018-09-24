<?php

/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 18.09.2018
 * Time: 18:40
 */
require_once __DIR__ . '/../DB.php';


abstract class base
{
    protected $price;
    public $title;
    public function getPrice($sale){
        $saleSum = $this->price * ($sale / 100);
        $money = $this->price -$saleSum;
        echo "discounted price $money <br><br>";
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function __construct($price, $title)
    {
        $this->price = $price;
        $this->title = $title;
    }

    static public function get($id) {
        $db = new DB();
        $tn = static::$tableName;
        if ($tn) {
            $query = "SELECT * FROM {$tn} WHERE id = {$id}";
            return $db->getObject($query, static::class);
        }
        else {
            echo "You forgot set 'tableName' property <br>";
            die;
        }
    }
    public function getAll() {
        $db = new DB();
        $tn = static::$tableName;
        if ($tn) {
            $query = "SELECT * FROM {$tn}";
            return $db->getAllObjects($query, static::class);
        }
        else {
            echo "You forgot set 'tableName' property <br>";
            die;
        }
    }
    public function delete() {
        $db = new DB();
        $tn = static::$tableName;
        if ($tn) {
            $query = "DELETE FROM {$tn} WHERE id = {$this->id}";
            return $db->execute($query);
        }
        else {
            echo "You forgot set 'tableName' property <br>";
            die;
        }
    }
    static protected $tableName = null;

    
}

?>