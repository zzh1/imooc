<?php
namespace app\ctrl;
class indexCtrl{
    public function index(){
        p('it is index');
        $model = new \core\lib\model();
        $sql = "select * from USER ";
        $ret = $model->query($sql);
        p($ret->fetchAll());
    }

}