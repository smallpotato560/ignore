<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use DB;
use Mockery\CountValidator\Exception;

class UserLikeAtom extends Model
{
    //
    const table='userlike';
    public static function getResourse($attributes=[],$columns=['*'])
    {
        $select = DB::table(self::table);
        $result = null;
        try {
            $result = $select->where($attributes)->select($columns)->first($columns);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
        return $result;
    }

    public static function getAll($attributes=[],$columns=['*'],$size=15)
    {
        $select = DB::table(self::table);
        $result = null;
        try {
            $result = $select->where($attributes)->select($columns)->paginate($size,$columns);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
        return $result;
    }

    public static function exist($attributes=[])
    {
        $result = DB::table(self::table)->select(['id'])->where($attributes)->first(['id']);
        return $result?true:null;
    }

    public static function newResource($attributes=[])
    {
        $select = DB::table(self::table);
        try {
            $exist = self::exist($attributes);
            $result = null;
            if(!$exist) {
                $attributes['created_at'] = Carbon::now();
                $result = $select->insertGetId($attributes);
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
        return $result;
    }
    public static function delResource($id)
    {
        $result = DB::table(self::table)->delete($id);
        return $result?true:false;
    }
}
