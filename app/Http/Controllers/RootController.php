<?php
/**
 * Created by PhpStorm.
 * User: TianChen
 * Date: 15/11/7
 * Time: 22:42
 */

namespace App\Http\ROOT;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class RootController extends Controller
{
    public function signIn(RedirectResponse $redirectResponse)
    {
        $all=$redirectResponse->getRequest()->all();
        return view("index",["all"=>$all]);
    }
}