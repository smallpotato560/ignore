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

    public function modifyuser(Request $request)
    {
        $id = $request->get('id',null);
        $user_model = new User();
        $user = $user_model->getUser(['id'=>$id]);
        $data=['id'=>$id,'user'=>$user];
        return view('ajax/admin/muser',$data)->renderSections();
    }
    public function modifyportal(Request $request)
    {
        $id = $request->get('id',null);
        $portal_model = new Portal();
        $portal = $portal_model->getPortal(['id'=>$id]);
        $data=['id'=>$id,'portal'=>$portal];
        return view('ajax/admin/mportal',$data)->renderSections();
    }
    public function save(Request $request)
    {
        $method = $request->get('method',null);
        switch($method){
            case 'save-u':
                $user_model = new User();
                $attributes=[
                    'id'=>$request->get('id',null),
                    'name'=>$request->get('name',null),
                    'email'=>$request->get('email',null),
                    'role'=>$request->get('role',null),
                ];
                $result = $user_model->modifyUser($attributes);
                $code= $result?200:201;
                $msg = $result?'成功':'失败';
                die(json_encode(['code'=>$code,'msg'=>$msg]));
            case 'save-p':
                $portal_model = new Portal();
                $attributes=[
                    'id'=>$request->get('id',null),
                    'name'=>$request->get('name',null),
//                    'parent'=>$request->get('parent',null),
                ];
                $results = $portal_model->modifyPortal($attributes);
                $code = $results?200:201;
                $msg = $results?'成功':'失败';
                die(json_encode(['code'=>$code,'msg'=>$msg]));
            case 'del-p':
                $portal_model = new Portal();
                $id=$request->get('id',null);
                $results = $portal_model->deletePortal($id);
                $code = $results?200:201;
                $msg = $results?'成功':'失败' ;
                die(json_encode(['code'=>$code,'msg'=>$msg]));
            default:break;
        }
    }
}