<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Role extends RoleAtom
{
    //
    public function getOneRole($attributes=[],$columns=['*'])
    {

    }
    public function getAllRoles($attributes=[],$columns=['*'])
    {
        $result = RoleAtom::getBatch($attributes,$columns);
        return $result;
    }
    public function getBatchRoles($attributes=[],$columns=['*'],$size)
    {

    }
    public function newRole($attirbutes=[])
    {
        $result = RoleAtom::newOne($attirbutes);
        return $result;
    }
}
