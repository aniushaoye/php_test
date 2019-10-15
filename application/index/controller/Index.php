<?php
namespace app\index\controller;

use think\Config;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        return json([
            'data'=>[
                'id'=>1,
                'username'=>'xxxx'
            ],
            'code'=>1,
            'msg'=>'success'
        ]);
    }

    public function lists()
    {
        $result = Db::table('user')->where('id',1)->find();
        return json(['data'=>$result]);
    }
}
