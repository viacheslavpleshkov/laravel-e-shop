<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_admin = new User();
        $user_admin->name = 'Admin';
        $user_admin->number = '999 4567 8902';
        $user_admin->email = 'admin@mail.com';
        $user_admin->password = Hash::make('admin');
        $user_admin->role_id = 4;
        $user_admin->save();

        $user_moderator = new User();
        $user_moderator->name = 'Moderator';
        $user_moderator->number = '999 4567 8902';
        $user_moderator->email = 'moderator@mail.com';
        $user_moderator->password = Hash::make('moderator');
        $user_moderator->role_id = 3;
        $user_moderator->save();

        $user_author = new User();
        $user_author->name = 'Author';
        $user_author->number = '999 4567 8902';
        $user_author->email = 'author@mail.com';
        $user_author->password = Hash::make('author');
        $user_author->role_id = 2;
        $user_author->save();

        $user_user = new User();
        $user_user->name = 'User';
        $user_user->number = '999 4567 8902';
        $user_user->email = 'user@mail.com';
        $user_user->password = Hash::make('user');
        $user_user->role_id = 1;
        $user_user->save();
    }
}
