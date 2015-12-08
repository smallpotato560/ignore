<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Auth\Guard;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Mockery\CountValidator\Exception;

class SignUpController extends Controller
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
        //sign up
        return view();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Requests\SignUpRequest $request)
    {
        //
        $usermodel = new User();
        $all = $request->all();
        try {
            $password =$all["password"];
            $payload = \Crypt::encrypt($password);
            $all["password"] = $payload;
            $all['role']=5;
            if(isset($all['_token']))
                unset($all['_token']);
            $user = $usermodel->newUser($all);
            if($user){
                $login = $this->login($all);
                return $login;
            }
            dd("signup failed!");
        } catch(Exception $e) {
            $message = $e->getMessage();
            $code= $e->getCode();
            dd(["message"=>$message,"code"=>$code]);
        }
    }
    public function login($all)
    {
        $usermodel = new \App\User();
        $user = $usermodel->getAuthIdentifier($all['email']);
        session(["email"=>$all["email"]]);
        \Session::set('id',$user->id);
        \Session::set('name',$user->name);
        \Session::set('r',$user->role);
        $login_at = Carbon::now();
        $result = $usermodel->modifyUser(['id'=>$user->id,'login_at'=>$login_at]);
        \Session::set('login_at',$login_at);
        return redirect()->action("RootController@create");
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
