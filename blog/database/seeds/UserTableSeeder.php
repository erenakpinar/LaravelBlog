<?php
/**
 * Created by PhpStorm.
 * User: eren
 * Date: 22/06/2017
 * Time: 17:04
 */
use Illuminate\Database\Seeder;
use App\Models;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        Models\UserModel::create(array(
            'name'     => 'Eren Akpınar',
            'email'    => 'ea@erenakpinar.com',
            'profile_img' => 'admintemplate/dist/img/avatar04.png',
            'password' => Hash::make('1'),
        ));
    }

}
