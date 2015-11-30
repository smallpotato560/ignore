<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use DB;
use Mockery\CountValidator\Exception;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract{
    use Authenticatable, CanResetPassword;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword($email="")
    {
        $result = DB::table("users")->where("email",$email)->first(["password"]);
        return $result?$result->password:false;
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier($email="")
    {
        $user = DB::table("users")->where("email",$email)->first(['id','name','role']);
        return $user?$user:null;
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string $value
     * @return void
     */
    public function setRememberToken($value)
    {

    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {

    }
    public function paginateUser($search=null,$size=10,$order='id',$asc='asc')
    {
        $result =null;
        $select = \DB::table($this->table);
        try {
            if($search)
                $select->where('name',$search);
            $result = $select->orderBy($order, $asc)->paginate($size);
        }catch (Exception $e){
            dd($e->getMessage());
        }
        return $result;
    }
    public function newUser($attributes=[])
    {
        $id = null;
        if(!$attributes)
            return $id;
        try{
            $select = \DB::table('users');
            $id = $select->insertGetId($attributes);
        }catch (Exception $e){
            dd($e->getMessage());
        }
        return $id;
    }
    public function modifyUser($attributes=[])
    {
        $result = null;
        if(!isset($attributes['id']))
            return $result;
        $id=$attributes['id'];
        unset($attributes['id']);
        try{
            $select = \DB::table($this->table);
            $result = $select->where(['id'=>$id])->update($attributes);
        }catch (Exception $e){
            dd($e->getMessage());
        }
        return $result?true:false;
    }
}
