<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\RootController;
use Illuminate\Auth\Guard;
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
        //鐧婚檰閫昏緫
        if($user->isExist($all['email'])){
            $payload = $user->getPassword($all["email"]);
            if($payload && \Crypt::decrypt($payload)===$all["password"])
               return redirect()->action("RootController@signIn")->withInput($all);
            dd("signin failed");
            //濡傛灉鐧婚檰澶辫触,閲嶅畾鍚戝埌鐧诲叆椤靛苟鎶涘嚭閿欒淇℃伅缁欑敤鎴�,鐧婚檰澶辫触鐨勯噸瀹氬悜閫昏緫搴旇鍦╯ignIn涓�
        }
        //娉ㄥ唽閫昏緫
        try {
            $password =$all["password"];
            $payload = \Crypt::encrypt($password);
            $all["password"] = $payload;
            $user->create($all);
        } catch(QueryException $e) {
            $message = $e->getMessage();
            $code= $e->getCode();
            dd(["message"=>$message,"code"=>$code]);
        }
    }
//    public function validate($data=array())
//    {
//        $auth = new Guard();
//        $auth->validate($data);
//    }

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
