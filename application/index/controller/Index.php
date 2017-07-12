<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        echo 1;
        $sum = 0;
        $arr = [1,'-1','-2',3,-4];
        foreach ($arr as $v){
            $sum +=  abs((int)$v);
        }
        var_dump($sum);
        exit;
        $data = Db::name('test')->select();
        var_dump($data);
        return $this->fetch();
    }
}
