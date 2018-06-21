<?php
namespace app\ctrl;
use core\lib\model;

class indexCtrl extends \core\imooc {

    //所有留言
    public function index(){
        $this->display('index.html');
    }
    //添加留言
    public function add(){
        $this->display('add.html');
    }
    //保存留言
    public function save(){
        $data['title'] = post('title');
        $data['content'] = post('content');
        $data['createtime'] = time();
        $model = new \app\model\guestbookModel();
        $ret = $model->addOne($data);
        if ($ret){
            jump('/');
        }else{
            p('error');
        }
    }

}