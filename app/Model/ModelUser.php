<?php
/**
 * Created by PhpStorm.
 * User: TianChen
 * Date: 15/8/29
 * Time: 21:50
 */

namespace App\Model;
use DB;


class ModelUser
{
    public function  getAll($sql,$bind=array())
    {
        $result = DB::select($sql,$bind);
        return $result;
    }
}