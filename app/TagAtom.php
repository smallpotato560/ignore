<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Database\QueryException;

class TagAtom extends Model
{
    //
    static $table="tags";
    public static function getTags($attributes=array(),$columns=["*"],$orderby=array('column'=>'id','direction'=>'asc'))
    {
        try {
            $result = DB::table(self::$table)->select($columns)->where($attributes)->orderBy($orderby)->get();
        } catch (QueryException $e) {
            dd($e->getMessage());
        }
        return $result?$result:null;
    }

    public static function getTag($attributes=array(),$columns=["*"])
    {
        try {
            $result = DB::table(self::$table)->select($columns)->where($attributes)->first();
        } catch (QueryException $e) {
            dd($e->getMessage());
        }
        return $result?$result:null;
    }

    public static function newTags($attributes=array())
    {
        try {
            $result = DB::table(self::$table)->insertGetId($attributes);
        } catch (QueryException $e) {
            dd($e->getMessage());
        }
        return $result?$result:null;
    }

    public static function modifyTags($attributes=array())
    {
        $isExist = self::getTag($attributes,["id"]);
        if(!$isExist)
            return false;
        try {
            $result = DB::table(self::$table)->update($attributes);
        } catch (QueryException $e) {
            dd($e->getMessage());
        }
        return $result?$result:null;
    }
}
