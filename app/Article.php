<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'articles';

    public static function create($article)
    {
//        Eloquent ORM
        $article=(object)$article;
        $article->save();
    }
}
