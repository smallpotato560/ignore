<?php
/**
 * Created by PhpStorm.
 * User: TianChen
 * Date: 15/10/18
 * Time: 17:30
 */

namespace App\Http\Controllers\Admin;


class AdminAjaxController extends AdminHomeController
{
    public function home()
    {
        $token = csrf_token();
        return view('ajax/admin/home');
    }
    public function setting()
    {
        $token = csrf_token();
        return view('ajax/admin/setting');
    }
    public function publish()
    {
        return (view('ajax/admin/publish'));
    }
    public function help()
    {
        $token = csrf_token();
        return (view('ajax/admin/help'));
    }
}