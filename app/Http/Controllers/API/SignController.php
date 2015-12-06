<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Carbon;

class SignController extends Controller
{
    public function in(Request $request)
    {
        $email = $request->get('email',null);
        $password = $request->get('password',null);
        $response=[];
        $usermodel = new \App\User();
//        获取用户信息
        if($user = $usermodel->getAuthIdentifier($email)){
            $payload = $usermodel->getAuthPassword($email);
            if($payload && \Crypt::decrypt($payload) == $password) {
                $login_at = \Carbon\Carbon::now();
                \Session::set('login_at',$login_at);
                \Session::set('email',$email);
                \Session::set('id',$user->id);
                \Session::set('name',$user->name);
                \Session::set('r',$user->role);
                $result = $usermodel->modifyUser(['id'=>$user->id,'login_at'=>$login_at]);
                if($result) {
                    $response['s']=1;
                    $response['msg']='登录成功!';
                    $response['session_id']=\Session::getId();
                    die(json_encode($response));
                }
            }
        }
        $response['s']=0;
        $response['msg']='登录失败!';
        die(json_encode($response));
    }
    public function up(Request $request)
    {}
}
