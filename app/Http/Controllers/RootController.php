<?php
/**
 * Created by PhpStorm.
 * User: TianChen
 * Date: 15/11/7
 * Time: 22:42
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class RootController extends Controller
{
    public function signIn()
    {
        $info = old();
//        $v = \Auth::validate($info);
//        var_dump($v);
        //auth
        //hold session
        return view("index");
    }
}