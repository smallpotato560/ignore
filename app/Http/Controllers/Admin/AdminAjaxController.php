<?php
/**
 * Created by PhpStorm.
 * User: TianChen
 * Date: 15/10/18
 * Time: 17:30
 */

namespace App\Http\Controllers\Admin;


use App\Article;
use Illuminate\Http\Request;

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
        return view('ajax.admin.setting')->renderSections();
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
        $article = new Article();
        $result = $article->getArticle(["id"=>2]);
        $content = $result->content;
        $title = $result->title;
        return (view('ajax/admin/modify',["content"=>$content,"title"=>$title])->renderSections());
    }
}