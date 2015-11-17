<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

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


    public static function deletePortal()
    {

    }
}
