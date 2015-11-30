<?php

namespace App\Http\Controllers;

use App\Article;
use App\UserLikeAtom;
use App\UserLikeModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($Uid)
    {
        if($Uid) {
            $attributes = ['User_id' => $Uid];
            $usrlike = new UserLikeModel();
            $result = $usrlike->getAll($attributes);
        }
    }

    //收藏或者取消收藏
    public function create($id)
    {
        //
        $model = new Article();
        $article = $model->getArticle(["id"=>$id]);
        $usrlike = new UserLikeModel();
        $islike = $usrlike->islike(['Article_id'=>$id,'User_id'=>\Session::get('id')]);
        return view("article.index",["article"=>$article,'islike'=>$islike]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        die($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

}
