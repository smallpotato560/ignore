<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UserLikeAtom;
use Mockery\CountValidator\Exception;

class UserLikeModel extends Model
{
    //
    public function like($attributes=[])
    {
        $result = UserLikeAtom::newResource($attributes);
        return $result?true:false;
    }
    public function unlike($id)
    {
        if($id);
            $result = UserLikeAtom::delResource($id);
        return $result;
    }

    public function ulike($attributes=[])
    {
        $Aid=$attributes['Article_id'];
        $Uid=$attributes['User_id'];
        $bind=['User_id'=>$Uid,'Article_id'=>$Aid];
        $result= UserLikeAtom::getResourse($bind,['id']);
        if($result) {
            $id=$result->id;
            return $this->unlike($id);
        }
        return $this->like($bind);
    }

    public function islike($attributes=[])
    {
        $Aid=$attributes['Article_id'];
        $Uid=$attributes['User_id'];
        $bind=['User_id'=>$Uid,'Article_id'=>$Aid];
        try {
            $result = UserLikeAtom::getResourse($bind, ['id']);
        }catch (Exception $e) {
            dd($e->getMessage());
        }
        return $result?$result->id:false;
    }
    public function getAll($attirbutes=[],$columns=['*'],$page=15)
    {
        if(!$columns)
            $columns=['*'];
        $result = UserLikeAtom::getAll($attirbutes,$columns,$page);
        return $result;

    }
}
