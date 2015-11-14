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
        $article = self::getArticles($article);
        return $article[0];
    }
    public static function getArticles($article=array())
    {

        $result = DB::table("articles")->select()->where($article)->get();
        return $result?$result:null;

    }
}
