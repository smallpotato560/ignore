<?php
/**
 * Created by PhpStorm.
 * User: TianChen
 * Date: 15/10/18
 * Time: 17:30
 */

namespace App\Http\Controllers\Admin;


use App\Article;
use App\Portal;
use Illuminate\Http\Request;

class AdminAjaxController extends AdminHomeController
{
    public function ajaxHome()
    {
        return view('ajax/admin/home')->renderSections();
    }
    public function setting()
    {
        return view('ajax.admin.setting')->renderSections();
    }

    public function ajaxPublish()
    {
        $portal = new Portal();
        $portals = $portal->getPortals();
        return (view('ajax/admin/publish',["portals"=>$portals])->renderSections());
    }

    public function help()
    {
        return (view('ajax/admin/help'));
    }

    public function ajaxModify()
    {
        $article = new Article();
        $result = (array)$article->getArticles();
        return (view('ajax/admin/modify',["all"=>$result])->renderSections());
    }
}