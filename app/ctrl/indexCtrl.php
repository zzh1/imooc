<?php
namespace app\ctrl;
use core\lib\model;

class indexCtrl extends \core\imooc {
    public function index(){
        $model = new \app\model\cModel();

        $data = array(
            'username'=>'IMOOC3333',
            'password'=>'12233'
        );
        $ret = $model->setOne(15,$data);

        dump($ret);

    }
}