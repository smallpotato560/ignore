<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Mockery\CountValidator\Exception;

class Article extends Model
{
    //
    protected $table = 'articles';
    protected $hidden = ["_token"];
    public function __construct(array $attributes=array())
    {
        parent::__construct($attributes);
    }

    public static function newArticle($article=array())
    {
//        Eloquent ORM
        try {
            $reuslt = DB::table("articles")->insertGetId($article);
        } catch (Exception $e) {
            return false;
        }
        return $reuslt?$reuslt:null;
    }

    public static function modifyArticle($article=array())
    {

    }

    public static function deleteArticle($id)
    {

    }
    public static function getArticle($article=array())
    {

        if(!(isset($article["id"]) && $id = $article["id"]))
            return false;
        $result = DB::table("articles")->select()->where($article)->first();
        return $result?$result:null;

    }
}
