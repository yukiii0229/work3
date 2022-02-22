<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    public function index()
    {
        $user = Auth::user();
        $items = Author::paginate(4);
        $param = ['items' => $items, 'user' =>$user];
        return view('index', $param);
    }
}
