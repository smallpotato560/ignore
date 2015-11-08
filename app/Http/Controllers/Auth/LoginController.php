<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\RootController;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mockery\Exception;
use Illuminate\Contracts\Encryption\DecryptException;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return  view("auth.login");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Requests\LoginRequest $request)
    {
        $all = $request->all();
        $user = new \App\User();
        //登陆逻辑
        if($user->isExist($all['email'])){
            $password = $user->getPassword($all["email"]);
            if(\Crypt::decrypt($password)===$all["password"])
               return redirect()->action("RootController@signIn")->withInput($all);
            dd("signin failed");
            //如果登陆失败,重定向到登入页并抛出错误信息给用户,登陆失败的重定向逻辑应该在signIn中
        }
        //注册逻辑
        try {
            $all["password"]=\Crypt::encrypt($all["password"]);
            $user->create($all);
        } catch(QueryException $e) {
            $message = $e->getMessage();
            $code= $e->getCode();
            dd(["message"=>$message,"code"=>$code]);
        }
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
