<?php
/**
 * Created by PhpStorm.
 * User: TianChen
 * Date: 15/11/7
 * Time: 22:42
 */

namespace App\Http\Controllers;
use App\Article;
use App\Http\Controllers\Controller;
use App\Portal;
use Illuminate\Http\RedirectResponse;

class RootController extends Controller
{
    public function create()
    {
//        dd(\Session::all());
        $model = new Portal();
        $portals = $model->getPortals(["parent"=>0]);
        if($portals && is_array($portals)) {
            foreach($portals as $portal) {
                $pids[] = $portal->id;
            }
            $article_model = new Article();
            foreach($pids as $pid) {
                $articles[$pid]=$article_model->getArticles(['Portal_id'=>$pid]);
            }
            return view("index", ["portals" => array_chunk($portals, 3),'articles'=>$articles]);
        }
        return view("index");
    }

    public function getTopPortals()
    {

    }

    public function getPortalArticles($Portal_id)
    {

    }
}