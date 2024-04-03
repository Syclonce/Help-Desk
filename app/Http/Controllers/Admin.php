<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function ticket()
    {
        $users = User::all();
        $posts = Post::all();
        $data = $posts->map(function ($post) use ($users) {
            $user = $users->where('id', $post->user_id)->first();
            if ($user) {
                return (object) [
                    'name' => $user->name,
                    'topic' => $post->topic,
                    'option' => $post->option,
                    'post_code' => $post->post_code,
                ];
            }
        });
        return view('admin.mail', compact('data'));
    }
}
