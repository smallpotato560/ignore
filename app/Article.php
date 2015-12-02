<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Mockery\CountValidator\Exception;

class Article extends Model
{
    //
    const table = 'articles';
    protected $hidden = ["_token"];
    //
    protected $xtable = 'article_extend';
    protected $extends = array();
    //是否含有扩展字段
    public function isHasExtends($Article_id)
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
        if(isset($article['id'])) {
            $id = $article['id'];
            unset($article['id']);
            try {
                $result = DB::table(self::table)->where(['id' => $id])->update($article);

            } catch(Exception $e) {
                return false;
            }
            return $result;
        }
        return null;
    }

    public static function deleteArticle($attributes=[])
    {
        try{
            $result = \DB::table(self::table)->where($attributes)->delete();
        }catch (Exception $e){
            dd($e->getMessage());
        }
        return $result?true:false;

    }
    public static function getArticle($article=array())
    {
        $article = self::getArticles($article);
        return $article[0];
    }

    public  static  function isExist($id)
    {
        try{
            $result=DB::table(self::table)->where(['id'=>$id])->get(['id']);
        } catch(Exception $e){
            return false;
        }
        if(isset($result[0])){
            return $result[0];
        }
        return null;
    }

    public static function paginateArticles($attributes=array(),$size=10,$order='id',$asc='asc')
    {
        $result = DB::table('articles')->where($attributes)->orderBy($order,$asc)->paginate($size);
        return $result?$result:null;
    }

    public static function getArticles($article=array())
    {
        $result = DB::table("articles")->select()->where($article)->get();
        return $result?$result:null;
    }
}
