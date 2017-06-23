<?php

/**
 * Created by PhpStorm.
 * User: eren
 * Date: 23/06/2017
 * Time: 10:43
 */

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index()
    {
        return View('admin/home');
    }
}