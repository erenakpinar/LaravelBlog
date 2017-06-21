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

    public static function getPublishPost()
    {
        return self::where('status', 'publish')
            ->get()->toArray();
    }

    public static function getPublishPostWithAuthor()
    {
        return self::where('status', 'publish')
            ->join('author', 'post.author_id', '=', 'author.id')
            ->get();
    }


}