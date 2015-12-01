<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\UserLikeModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Article;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $usrlike = new UserLikeModel();
        $user_model = new User();
        if($Uid = \Session::get('id')) {
            $user = $user_model->getUser(['id'=>$Uid]);
            $attributes=['User_id'=>$Uid];
            $alllikes = $usrlike->getAll($attributes,['Article_id']);
            $article_model = new Article();
            $articles=null;
            foreach($alllikes as $Aid){
                $articles[]=$article_model->getArticle(['id'=>$Aid->Article_id]);
            }
        }
        return view("user.create",['articles'=>$articles,'alllikes'=>$alllikes,'user'=>$user]);
    }
    public function unlike($Aid)
    {
        $usrlike_model = new UserLikeModel();
        $Uid=\Session::get('id');
        $id = $usrlike_model->islike(['User_id'=>$Uid,'Article_id'=>$Aid]);
        if($id) {
            $result = $usrlike_model->unlike($id);
            if($result){
                return \Redirect::action('UserController@create',['email'=>\Session::get('email','error'),'p'=>'l']);
            }
        }
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
