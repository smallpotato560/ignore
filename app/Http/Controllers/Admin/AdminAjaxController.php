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
    public function ajaxHome()
    {
        $token = csrf_token();
        return view('ajax/admin/home')->renderSections();
    }
    public function setting()
    {
        $token = csrf_token();
        return view('ajax/admin/setting');
    }
    public function ajaxPublish()
    {
        return (view('ajax/admin/publish')->renderSections());
    }
    public function help()
    {
        $token = csrf_token();
        return (view('ajax/admin/help'));
    }
    public function ajaxModify()
    {
        return (view('ajax/admin/modify')->renderSections());
    }
}