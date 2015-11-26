<?php

namespace App\Http\Controllers;

use App\UserLikeModel;
use Illuminate\Http\Request;
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
    public function create(Request $request)
    {
        $Aid = $request->get('Article_id');
        $Uid = $request->get('User_id');
        if($Aid&&$Uid) {
            $attributes=['Article_id'=>$Aid,'User_id'=>$Uid];
            $usrlike = new UserLikeModel();
            $result = $usrlike->like($attributes);
            if($result)
                die(json_encode(['code'=>200,'msg'=>'成功']));
            die(json_encode(['code'=>500,'msg'=>'失败']));
        }
        die(json_encode(['code'=>201,'msg'=>'参数有误']));
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
