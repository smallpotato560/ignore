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
                switch($portal->name){
                    case '今日要闻':
                        $positions[2]=$portal->id;
                        break;
                    case '图片新闻':
                        $positions[4]=$portal->id;
                        break;
                    case '媒体报导':
                        $positions[3]=$portal->id;
                        break;
                }
                $pids[] = $portal->id;
            }
            $article_model = new Article();
            foreach($pids as $pid) {
                $articles[$pid]=$article_model->getArticles(['Portal_id'=>$pid]);
            }
            return view("index", ["portals" => $portals,'articles'=>$articles,'positions'=>$positions]);
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