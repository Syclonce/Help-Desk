<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Ticket as ModelsTicket;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



class Ticket extends Controller
{


    public function create()
    {
        $userId = auth()->id();
        $options = ModelsTicket::all();
        return view('pages.ticket', compact('options', 'userId'));
    }


    public function creates(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'option' => 'required',
            'topic' => 'required',
            'summernote' => 'required',
        ], [
            'user_id.required' => 'User ID tidak boleh kosong.',
            'option.required' => 'Opsi tidak boleh kosong.',
            'topic.required' => 'Topik tidak boleh kosong.',
            'summernote.required' => 'Konten tidak boleh kosong.',
        ]);

        $validated = $request->all();
        $postCode = 'Helps-' . Str::random(10);
        $validated['post_code'] = $postCode;

        $validated['content'] = $request->summernote;

        Post::create($validated);

        return redirect()->route('homes')->with('success', 'Ticket created successfully.');
    }


    public function lists()
    {
        $userId = auth()->id();
        $posts = Post::all();
        return view('pages.myticket', compact('posts', 'userId'));
    }
}
