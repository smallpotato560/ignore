<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'article';

    public function publish($article)
    {
//        SQL EXEC
//        $sql='';
//        $this->query();
//        Eloquent ORM
        $article->title='test';
        $article->content='holo';
        $article->intro='xasd';
    }
}
