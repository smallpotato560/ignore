<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\User;
use App\UserLikeModel;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserLikeController extends Controller
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
        $user_like_model = new UserLikeModel();
        $article_model = new Article();
        $user_model = new User();
        $ids = $user_like_model->getAll(['User_id'=>$id],['Article_id']);
        $articles = [];
        $index = 0;
        foreach($ids->items() as $item) {
            $tmp = $article_model->getArticle(['id'=>$item->Article_id]);
            $articles[$index]['title'] = strip_tags($tmp->title);
            $articles[$index]['content']= strip_tags($tmp->content);
            $articles[$index]['author'] = $user_model->getUser(['id'=>$tmp->Users_id],['name'])->name;
            $articles[$index]['created_at'] = $tmp->created_at;
            $articles[$index]['updated_at'] = $tmp->updated_at;
            ++$index;
        }
        $response = [];
        $response['s'] = '1';
        $response['msg'] = 'okay!';
        $response['articles']=$articles;
        die(json_encode($response));
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
