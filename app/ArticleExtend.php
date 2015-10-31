<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleExtend extends Model
{
    //
    protected $table = 'article_extend';
    //存放扩展字段，默认无
    //array=>[Article_id1=>array(),...]
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
}
