<?php
/**
 * Created by PhpStorm.
 * User: eren
 * Date: 23/06/2017
 * Time: 10:43
 */

namespace App\Http\Controllers;

use App\Models;
use App\Classes;

class AdminController extends Controller
{
    public function index()
    {
        return View('admin/home',
            ['postCount' => Models\PostModel::getPostCount(),
                'catCount' => Models\CategoryModel::getCatCount(),
                'userCount' => Models\UserModel::getUserCount(),
                'wordCount' => Classes\WordCount::getWordCount()
            ]);
    }


}