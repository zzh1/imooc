<?php
namespace app\model;
use core\lib\model;
class guestbookModel extends model{

    public $table = 'guestbook';

    public function all(){
        return $this->select($this->table,'*');
    }

    public function addOne($data){
        return $this->insert($this->table,$data);
    }

}