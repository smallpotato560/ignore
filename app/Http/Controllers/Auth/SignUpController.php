<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Auth\Guard;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
            if($user = $usermodel->create($all)){
                $guard = new Guard(null,null,$request);
                $guard->login($user);
                return redirect()->action("RootController@create");
            }
            dd("signup failed!");

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
