<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\RootController;
use App\User;
use Carbon\Carbon;
use Illuminate\Auth\Guard;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Mockery\Exception;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Role;

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
        return $this->login($all);
    }

    public function login($all)
    {
        $usermodel = new \App\User();
        if($user = $usermodel->getAuthIdentifier($all['email'])){
            $payload = $usermodel->getAuthPassword($all["email"]);
            if($payload && \Crypt::decrypt($payload) == $all["password"]) {
                session(["email"=>$all["email"]]);
                \Session::set('id',$user->id);
                \Session::set('name',$user->name);
                \Session::set('r',$user->role);
                $login_at = Carbon::now();
                $result = $usermodel->modifyUser(['id'=>$user->id,'login_at'=>$login_at]);
                \Session::set('login_at',$login_at);
                \Session::save();
                return redirect()->action("RootController@create")->withInput($all);
            }
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
    public function logout($email="")
    {
        $usermodel = new User();
        $result = $usermodel->modifyUser(['id'=>\Session::get('id'),'logout_at'=>Carbon::now()]);
        \Session::flush();
        return redirect()->action("RootController@create");
    }
}
