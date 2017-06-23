<?php
/**
 * Created by PhpStorm.
 * User: eren
 * Date: 22/06/2017
 * Time: 17:01
 */

namespace App\Models;


class UserModel extends BaseModel
{
    protected $table = 'users';


    public static function getUserCount()
    {
        return self::count();
    }
}