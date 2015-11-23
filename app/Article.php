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
    //
    protected $xtable = 'article_extend';
    protected $extends = array();
    //是否含有扩展字段
    public function isHasExtends($Article_id)
    {

    }
    //获取扩展字段
    public function getArticleExtends($Article_id)
    {
        //just test how Eloquent worked
        $ex =  self::where('Articles_id','=',$Article_id)->all();
        foreach($ex as $val) {
            var_dump($val);
        }
    }
    //合并本条记录的所有字段
    public function merge($Article_id)
    {

    }
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
    public static function paginateArticles($attributes=array(),$size=10,$order='id')
    {
        $result = DB::table('articles')->where($attributes)->orderBy($order)->paginate($size);
        return $result?$result:null;
    }
    public static function getArticles($article=array())
    {
        $result = DB::table("articles")->select()->where($article)->get();
        return $result?$result:null;
    }
}
