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
use App\User;
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

    public function ajaxPublish(Request $request)
    {
        $id = (int)$request->get('id');
        $portal = new Portal();
        $portals = $portal->getPortals();
        $data = array(
            "portals"=>$portals
        );
        if(isset($id) && $id>0) {
            $model = new Article();
            $article = $model->getArticle(["id"=>$id]);
            $data['article']=$article;
        }

        return (view('ajax/admin/publish',$data)->renderSections());
    }

    public function help()
    {
        return (view('ajax/admin/help'));
    }

    public function ajaxModify()
    {
        $article = new Article();
        $result = $article->paginateArticles(array(),10,'updated_at');
        return (view('ajax/admin/modify',["all"=>$result])->renderSections());
    }

    public function setusr(Request $request)
    {
        //获取所有用户信息以及分页

        $search =$request->get('search',null);
        $usr_model = new User();
        $users=$usr_model->paginateUser($search);
        $data=[
            'users'=>$users,
        ];
        return view('ajax/admin/setusr',$data)->renderSections();
    }

    public function setportal(Request $request)
    {
        //获取所有门户点信息以及分页
        $search =$request->get('search',null);
//        $page = $request->get('page',null);
        $portal_model = new Portal();
        $attributes = null;
        if($search)
            $attributes = ['name'=>$search];
        $portals=$portal_model->paginate($attributes);
        $data=[
            'portals'=>$portals,
        ];
        return view('ajax/admin/setportal',$data)->renderSections();
    }

    public function modifyuser()
    {
        return view('ajax/admin/muser')->renderSections();
    }
    public function modifyportal()
    {

    }
}