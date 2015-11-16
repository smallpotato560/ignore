<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Portal extends Model
{
    //
    protected $table="portals";

    public static function getPortals($attr=array())
    {
        $result = DB::table("portals")->select()->where($attr)->get();
        return $result?$result:null;
    }

    public static function getPortal($attr=array())
    {
        $result = DB::table("portals")->select()->where($attr)->first();
    }

    public static function newPortal($portal=array())
    {
        $result = DB::table("portals")->insertGetId($portal);
        return $result?$result:null;
    }

    public static function isExist($attr)
    {

    }
    public static function deletePortal()
    {

    }
}
