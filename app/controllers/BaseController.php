<?php
/**
 * Created by PhpStorm.
 * User: designstudio_2
 * Date: 27/05/2014
 * Time: 13:50
 * Nothing but Comments up here above the namespace
 */

namespace app\controllers;

use app\models\BaseModel;

include ('app/models/BaseModel.php');


class BaseController {
    public $page;
    public function __construct(){
        if (isset($_GET['page'])){
            $this->page = $_GET['page'];
        }
        else{
            $this->page = 'home';

            $this->title = "Welcome too my app";
            $this->content = 'app/views/home.phtml';
        }

        $data = new BaseModel();
        if(isset($_GET['category'])){
            $data->createCategory($_GET['category']);
        }
        if(isset($_GET['locations'])){
            $data->createLocations($_GET['locations']);
        }
        $this->categories = $data->reviewCategory();

        $this->locations = $data->reviewLocations();





        switch($this->page){
            case 'home':
                $this->title = "Welcome too my app";
                $this->content = 'app/views/home.phtml';
                break;
            case 'about':
                $this->title = "Welcome too my About Page";
                $this->content = 'app/views/about.phtml';
                break;
            default:
                $this->title = "Welcome too my app";
                $this->content = 'app/views/home.phtml';
                break;
        }

    }


} 