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

    public static function getCategory()
    {
        return self::all()->toArray();
    }
}