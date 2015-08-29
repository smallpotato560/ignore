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
        foreach($result as $obj=>$attr)
            echo $obj.'=>'.$attr;

        var_dump($result);
        die;
        return view('test',$result);
    }
}