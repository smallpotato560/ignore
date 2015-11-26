<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLikeAtom extends Model
{
    //
    const table='userlike';
    public static function getResourses($attributes=[],...$p)
    {
        $db = new \DB();
        if(isset($p) && empty($p)) {
            foreach($p as $key=>$value) {
                switch($key) {
                    case '':break;
                }
            }
        }
        $db->table(self::table)->select();
    }
    public static function newResource($attributes=[])
    {

    }
}
