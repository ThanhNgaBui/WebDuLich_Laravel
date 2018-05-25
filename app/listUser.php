<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listUser extends Model
{
    protected $table = "users";
    //Nếu trong table có 2 cột là create_at và update_at thì biến $timestamp để mặc định true, nếu không có để là false
}
