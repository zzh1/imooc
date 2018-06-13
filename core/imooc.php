<?php
namespace core;
class imooc{
    public static $classMap = array();
    static public function run(){
        $route = new \core\lib\route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;
        $ctrlfile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
        $ctrlClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
        if (is_file($ctrlfile)){
            include $ctrlfile;
            $ctrl = new $ctrlClass;
            $ctrl->$action();
        }else{
            throw new \Exception('找不到控制器'.$ctrlClass);
        }
    }

    static public function load($class){
        //自动加载类库
        // new \core\route()
        // $class = '\core\route';
        // IMOOC.'/core/route.php';
        if (isset($classMap[$class])){
            return true;
        }else{
            $class = str_replace('\\','/',$class);   //替换与否都正确
            $file = IMOOC.'/'.$class.'.php';
            if (is_file($file)){
                include $file;
                self::$classMap[$class] = $class;
            }else{
                return false;
            }
        }

    }

}