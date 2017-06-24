<?php
/**
 * Created by PhpStorm.
 * User: eren
 * Date: 21/06/2017
 * Time: 16:17
 */

namespace App\Models;


class CategoryModel extends BaseModel
{
    protected $table = 'category';
    public $timestamps = false;

    public static function getCategory()
    {
        return self::all()->toArray();
    }

    public static function getCategoryPostByUrl($url)
    {
        return self::where('url', $url)
            ->join('postcategory as postcat', 'category.id', '=', 'postcat.category_id')
            ->join('post', 'postcat.post_id', '=', 'post.id')
            ->join('author', 'post.author_id', '=', 'author.id')
            ->get();
    }

    public static function getCatCount()
    {
        return self::count();
    }
}
