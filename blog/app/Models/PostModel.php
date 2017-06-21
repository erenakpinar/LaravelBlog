<?php

namespace App\Models;

class PostModel extends BaseModel
{
    protected $table = 'post';

    public static function getPost()
    {
        return self::all()->toArray();
    }

    public static function getPostById($id)
    {
        return self::find($id);
    }
}