<?php

namespace App\Http\Controllers\Test;
use App\Article;
use App\Http\Controllers\Admin\AdminAjaxController;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GlobalTestController extends Controller
{
    public function paginate()
    {
        $tmp_model = new AdminAjaxController();
        $tmp_model->ajaxModify();
    }
    public function testpage()
    {
        $tmp_model = new Article();
        $result = $tmp_model->paginateArticles(array(),23);
        return view('test.article',['all'=>$result]);

    }
}
