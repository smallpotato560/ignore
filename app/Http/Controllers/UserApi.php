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

    public function index()
    {
        return view('index');
    }


    public function listpage()
    {
        print_r(view('list'));
        die;
    }


    public function manager()
    {
        return view('manager');

    }
}