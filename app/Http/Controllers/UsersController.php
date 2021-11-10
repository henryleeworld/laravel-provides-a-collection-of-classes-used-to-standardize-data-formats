<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    public function show() 
    {
        $user = User::find(1);;
        echo '使用者：' . $user->name . '，建立時間：' . $user->created_at  . '，更新時間：' . $user->updated_at . '。' . PHP_EOL;
    }
}
