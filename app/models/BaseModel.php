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
    public function createCategory(){


    }
    public function reviewCategory(){
        $sql = 'SELECT * FROM categories ';
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