<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_model extends Model
{
    //khai báo các trường để thao tác(ngoài các trường khai báo thì không thể tác động vào các trường khác)
    //Bỏ thuộc tính timestamp
    protected $timestamp = false;
    protected $table = "users";
}
