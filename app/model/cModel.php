<?php
namespace app\model;
use core\lib\model;
class cModel extends model{

    public $table = 'user';

    public function lists(){
        $ret = $this ->select($this->table,"*");
        return $ret;
    }

    public function getOne($id){
        $ret = $this ->select($this->table,"*",array(
            "id"=>$id
        ));
        return $ret;
    }

    public function setOne($id,$data){
        return $this->update($this->table,$data,array(
            'id'=>$id
        ));
    }

    public function delOne($id){
        return $this->delete($this->table,array(
            'id'=>$id
        ));
    }

}