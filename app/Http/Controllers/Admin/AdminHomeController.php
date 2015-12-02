<?php

namespace App\Http\Controllers\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AdminHomeController extends Controller
{
    public function home()
    {
        return view('admin.create');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $all = $request->all();
        $model = new \App\Article();
        if(isset($all['_token']));
        unset($all["_token"]);
        $intro = explode('。',strip_tags($all["content"]),2);
        $intro = implode('。',$intro)."...";
        $all["intro"] = $intro;
        $all['created_at']=Carbon::now();
        $result = $model->newArticle($all);
        if($request) {
            echo '<script>window.location.href=\'/admin/home\';</script>';
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request,$id)
    {
        //
        $all = $request->all();
        if(!isset($all['id']) || !$all['id'])
            $all['Users_id']=\Session::get('id',null);
        $model = new \App\Article();
        if(isset($all['_token']));
            unset($all["_token"]);
        $intro = explode('。',strip_tags($all["content"]),1);
        $intro = implode('。',$intro)."...";
        $all["intro"] = $intro;
        if($id && !$model->isExist($id)) {
            $result = $model->newArticle($all);
        }
        $all['id']=$id;
        $all['updated_at']=Carbon::now();
        $result = $model->modifyArticle($all);
        if($request) {
            echo '<script>window.location.href=\'/admin/home\';</script>';
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $model = new \App\Article();
        $article = $model->getArticle(['id'=>$id]);
        $portal = new \App\Portal();
        $portals = $portal->getPortals();
        return view('admin/publish',['article'=>$article,'portals'=>$portals]);
    }

    public function uploadBanner(Request $request)
    {
        $all = $request->all();
        if(isset($all['file'])) {
            if(is_file('config'))
                mkdir('config');
            die(json_encode(['code' => 200, 'msg' => 'successful']));
        }
        die(json_encode(['code'=>404,'msg'=>'not found']));
    }
}
