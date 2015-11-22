<?php

namespace App\Http\Controllers;

use App\Article;
use App\Portal;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PortalController extends Controller
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
    public function create($id)
    {
        $model = new Article();
        $articles = $model->paginateArticles(["Portal_id"=>$id],3);
        $model = new Portal();
        while(($hasParent[] = $model->getPortal(["id"=>$id],["parent","name"]))) {
            $current = current($hasParent);
            $id =$current->parent;
        }
        unset($hasParent[count($hasParent)-1]);
        $hasParent = array_reverse($hasParent);
        if($articles)
            return view("portal.index",["all"=> $articles,"hasParent"=>$hasParent]);
        dd("no articles");
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
        $all = $request->all();
        unset($all["_token"]);
        $model = new Portal();
        $portal = $model->newPortal($all);
        if($portal)
            return redirect()->back();
        return false;
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
