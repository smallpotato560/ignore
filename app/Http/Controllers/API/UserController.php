<?php

namespace App\Http\Controllers\API;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
    public function create(Request $request)
    {
        //
        $name = $request->get('name',null);
        $email = $request->get('eamil',null);
        $password = \Crypt::encrypt($request->get('password',null));
        $user_model = new User();
        $attributes=[
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
        ];
        $id = $user_model->newUser($attributes);
        $response = ['s'=>0,'msg'=>'Orz'];
        if($id>0){
            $request['s']=1;
            $request['msg']='OK!';
            $request['id']=$id;
        }
        die(json_encode($response));
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
    public function show(Request $request)
    {
        //Laravel 5如何通过session_id解析session
        $session_id = $request->get('session_id',null);
        $vailed = \Session::isValidId($session_id);
        if($vailed) {
            $handler = \Session::getHandler();
            $session = $handler->read($session_id);
            $session = unserialize($session);
            if($session) {
                $response = [
                    's' => '1',
                    'name' => $session['name'],
                    'r' => $session['r'],
                    'msg' => '成功!',
                    'email'=>$session['email'],
                ];
                die(json_encode($response));
            }
        }
        die(json_encode(['s'=>"0"]));
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
