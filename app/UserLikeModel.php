<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UserLikeAtom;
class UserLikeModel extends Model
{
    //
    public function like($attributes=[])
    {
        $result = UserLikeAtom::newResource($attributes);
        return $result?true:false;
    }
    public function unlike($attributes=[])
    {
        $Aid=$attributes['Article_id'];
        $Uid=$attributes['User_id'];
        $result = UserLikeAtom::getResourse(['User_id'=>$Uid,'Article_id'=>$Aid]);
//        return $result;
        dd($result);
    }
}
