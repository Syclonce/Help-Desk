<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;


    public function index()
    {
        // Mengambil semua data dari tabel responses
        $responses = Comment::all();

        // Mengirim data ke view

    }
    public function post()
    {

        return $this->belongsTo(Post::class);
    }
}
