<?php
/**
 * Created by PhpStorm.
 * User: designstudio_2
 * Date: 17/04/2014
 * Time: 14:55
 */

namespace tests\controllers;
include('../../app/controllers/MainController.php');

class MainControllerTest extends \PHPUnit_Framework_TestCase {
    function testPageSet(){
        $data = new \app\controllers\MainController();
        $this->assertNotEmpty($data->page,$message='The page has not been set properly');
    }
    function testPageEquals(){
        $data = new \app\controllers\MainController();
        $this->assertEquals($data->page,'about',$message='is not set to about');
    }

}
 