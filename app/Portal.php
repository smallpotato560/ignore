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
        try{
            $result = DB::table("portals")->select()->where($attr)->first($column);
        }catch (Exception $e){
            dd($e->getMessage());
        }
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

    public static function deletePortal($id)
    {
        if(!$id)
            return null;
        $select = DB::table('portals');
        try{
            $result = $select->delete($id);
        }catch (Exception $e){
            dd($e->getMessage());
        }
        return $result?true:false;
    }

    public static function  modifyPortal($attributes=[])
    {
        $result = null;
        if(!isset($attributes['id']))
            return $result;
        $id=$attributes['id'];
        unset($attributes['id']);
        try{
            $select = \DB::table('portals');
            $result = $select->where(['id'=>$id])->update($attributes);
        }catch (Exception $e){
            dd($e->getMessage());
        }
        return $result?true:false;
    }
}
