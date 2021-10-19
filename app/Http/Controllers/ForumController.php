<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    private $params;

    public function index()
    {
        $this->params['ulasan'] = Forum::orderBy('created_at')->get();
        return view('forum.index', $this->params);
    }
}
