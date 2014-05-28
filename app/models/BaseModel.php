<?php
/**
 * Created by PhpStorm.
 * User: designstudio_2
 * Date: 27/05/2014
 * Time: 13:55
 */

namespace app\models;

use \PDO;
class BaseModel {
    public $conn;
    public function __construct(){
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=address_book','root'/*username,password*/);

        }catch (\PDOException $e){
            return $e->getMessage();

        }
    }
    public function createCategory($category){
        $sql = 'INSERT INTO categories (category) VALUES (:category)';
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':category',$category);
        $stmt->execute();
        return;

    }

    public function createLocations($locations){
        $sql = 'INSERT INTO location (locations) VALUES (:locations)';
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':locations',$locations);
        $stmt->execute();
        return;
    }
    public function reviewCategory(){
        $sql = 'SELECT * FROM categories';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $result;

    }
    public function reviewLocations(){
        $sql = 'SELECT * FROM location';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $result;

    }
    public function findCategory(){


    }
    public function updateCategory(){


    }
    public function deleteCategory(){


    }

} 