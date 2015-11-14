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

    public static function getPortal()
    {

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
