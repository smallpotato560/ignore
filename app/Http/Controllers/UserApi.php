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
        $table = json_encode
('<table class="table table-striped table-hover table-responsive">
    <thead>
    <tr>
        <th>
            编号
        </th>
        <th>
            产品
        </th>
        <th>
            交付时间
        </th>
        <th>
            状态
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            1
        </td>
        <td>
            TB - Monthly
        </td>
        <td>
            01/04/2012
        </td>
        <td>
            Default
        </td>
    </tr>
    <tr class="success">
        <td>
            1
        </td>
        <td>
            TB - Monthly
        </td>
        <td>
            01/04/2012
        </td>
        <td>
            Approved
        </td>
    </tr>
    <tr class="error">
        <td>
            2
        </td>
        <td>
            TB - Monthly
        </td>
        <td>
            02/04/2012
        </td>
        <td>
            Declined
        </td>
    </tr>
    <tr class="warning">
        <td>
            3
        </td>
        <td>
            TB - Monthly
        </td>
        <td>
            03/04/2012
        </td>
        <td>
            Pending
        </td>
    </tr>
    <tr class="info">
        <td>
            4
        </td>
        <td>
            TB - Monthly
        </td>
        <td>
            04/04/2012
        </td>
        <td>
            Call in to confirm
        </td>
    </tr>
    </tbody>
</table>');
return $table;


    }

    public function manager()
    {
        return view('manager');

    }
}