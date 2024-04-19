<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
                    'created_at' => $post->created_at,
                    'content' => $post->content,
                ];
            }
        });
        return view('admin.mail', compact('data'));
    }


    public function showPost($postId)
    {
        $userId = auth()->id();
        $userIds = DB::table('posts')->where('post_code', $postId)->value('user_id');
        $userName = DB::table('users')->where('id', $userIds)->value('name');
        $user = Auth::user();
        $posts = Post::where('post_code', $postId)->first();
        $comments = DB::table('comments')
            ->join('posts', 'comments.post_code', '=', 'posts.post_code')
            ->where('comments.post_code', $postId)
            ->where('posts.user_id', $userIds)
            ->select('comments.*')
            ->get();
        $title = "Helpdesk";

        return view('admin.showmail', compact('posts', 'userId', 'title', 'user', 'comments', 'userName', 'userIds'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'summernote' => 'required',
            'post_code' => 'required', // Pastikan post_id ada dan valid
        ]);

        $reply = new Comment(); // Ganti dengan model yang sesuai
        $reply->body = $request->input('summernote');
        $reply->post_code = $request->input('post_code'); // Pastikan column yang sesuai di database
        $reply->save();

        return redirect()->back()->with('success', 'Reply has been posted successfully.');
    }
}
