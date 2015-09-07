<?php
/**
 * Created by PhpStorm.
 * User: TianChen
 * Date: 15/8/29
 * Time: 21:56
 */

namespace App\Http\Controllers;


use App\Model\ModelUser;

class UserApi extends Controller
{
    public function test()
    {
        $model = new ModelUser();
        $sql = 'select * from User';
        $result = $model->getAll($sql);
        var_dump($result);
        die;
        return view('test', ['result' => $result]);
    }

    public function managerInfo()
    {
        $token = csrf_token();
        $data = '<h1>'.'测试成功!'.'</h1>';
        return json_encode($data);
    }

    public function index()
    {
        return view('index');
    }


    public function listpage()
    {
        return (view('list'));
    }

    public function managerIndex()
    {
        $token = csrf_token();
        //$include_path = '../../../resources/views/';
       // require_once($include_path.'table.php');
        //return $table;
        var_dump($include_path);
        die;
    }

    public function manager()
    {
        return view('manager');

    }
}