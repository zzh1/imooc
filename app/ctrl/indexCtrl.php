<?php
namespace app\ctrl;
use app\model\guestbookModel;

class indexCtrl extends \core\imooc {

    //所有留言
    public function index(){
        $model = new guestbookModel();
        $data = $model->all();
        $this->assign('data',$data);
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
        $model = new guestbookModel();
        $ret = $model->addOne($data);
        if ($ret){
            jump('/');
        }else{
            p('error');
        }
    }

    //删除留言
    public function del(){
        $id = get('id',0,'int');
        $model = new guestbookModel();
        $ret = $model->delOne($id);
        if ($ret){
            jump('/');
        }else{
            exit('删除失败');
        }
    }

}