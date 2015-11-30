<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Mockery\CountValidator\Exception;

class RoleAtom extends Model
{
    //
    protected  $fillable = ['created_at','updated_at',];
    const table='roles';
    public static function dbo()
    {
        $select = \DB::select(self::table);
        return $select;
    }

    public static function getOne($attributes=[],$columns=['*'])
    {
        if(!$attributes)
            return null;
        $select = self::dbo();
        try{
            $result=null;
            if($attributes)
                $select->where($attributes);
            elseif($columns) {
                $result = $select->select($columns)->first($columns);
                return $result;
            }
           $result= $select->first();
        }catch (Exception $e){
            dd($e->getMessage());
        }
        return $result;
    }
    public static function getBatch($attributes=[],$columns=['*'],$size=null)
    {
        if(!$attributes)
            return null;
        $select = self::dbo();
        try{
            $result=null;
            if($attributes)
                $select->where($attributes);
            elseif($columns) {
                $result = $select->select($columns)->get($columns);
                return $result;
            }
            $result= $select->get();
        }catch (Exception $e){
            dd($e->getMessage());
        }
        return $result;
    }
    public static function paginate($size,$order='id',$asc='desc')
    {
        $select = self::dbo();
        try{
            $result = $select->paginate($size,$order,$asc);
        }catch (Exception $e){
            dd($e->getMessage());
        }
        return $result;
    }
    public static function remove($id)
    {
        if(!$id)
            return null;
        $result = null;
        try{
            $select = self::dbo();
            $result = $select->delete($id);
        }catch (Exception $e){
            dd($e->getMessage());
        }
        return $result?true:false;
    }
    public static function newOne($attributes=[])
    {
        if(!$attributes)
            return null;
        if(isset($attributes['id']))
            return null;
        $select = self::dbo();
        try{
            $result=null;
            $attributes['created_at']=Carbon::now();
            $result=$select->insertGetId($attributes);
        }catch (Exception $e){
            dd($e->getMessage());
        }
        return $result;
    }
    public static function newBatch()
    {

    }
    public static function modify($attributes=[])
    {
       $result=null;
       if(!$attributes||!isset($attributes['id']))
           return null;
        $id= $attributes['id'];
        unset($attributes['id']);
        try{
            $select = self::dbo();
            $result = $select->where(['id'=>$id])->update($attributes);
        }catch (Exception $e) {
            dd($e->getMessage());
        }
        return $result;
    }
}
