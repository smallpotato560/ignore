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
        $usermodel = new \App\User();
        if($user = $usermodel->isExist($all['email'])){
            $payload = $usermodel->getPassword($all["email"]);
            if($payload && \Crypt::decrypt($payload)===$all["password"]) {
                $guard = new Guard();
                $guard->login($user);
                return redirect()->action("RootController@create")->withInput(@$all);
            }
        }
        dd("signin failed");
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
