<?php
namespace app\ctrl;
class indexCtrl extends \core\imooc {
    public function index(){
        $data = 'Hello World';
        $title = '视图文件';
        $this->assign('title',$title);
        $this->assign('data',$data);
        $this->display('index.html');
    }

}