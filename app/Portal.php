<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Mockery\CountValidator\Exception;

class Portal extends Model
{
    //
    protected $table="portals";

    public static function getPortals($attr=array(),$column="*")
    {
        $result = DB::table("portals")->select($column)->where($attr)->get();
        return $result?$result:null;
    }

    public static function getPortal($attr=array(),$column="*")
    {
        $result = DB::table("portals")->select()->where($attr)->first($column);
        return $result?$result:null;
    }

    public static function newPortal($portal=array())
    {
        $result = DB::table("portals")->insertGetId($portal);
        return $result?$result:null;
    }

    public static function paginate($attributes=array(),$size=10,$order='updated_at',$asc='desc')
    {
        $select = DB::table('portals');
        if(!empty($attributes))
            $select->where($attributes);
        try{
            $result = $select->orderBy($order,$asc)->paginate($size);
        }catch (Exception $e){
            dd($e->getMessage());
        }
        return $result?$result:null;
    }

    public static function deletePortal()
    {

    }
}
