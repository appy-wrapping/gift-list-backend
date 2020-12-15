<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friend;

class Friends extends Controller
{
    public function index() // show all friends
    {
        return Friend::all();
    }

    public function store(Request $request) // add new friend
    {
        $data = $request->all();
        $friend = Friend::create($data);

        return $friend;
    }
    
    public function destroy(Friend $friend) // delete friend
    {
        $friend->delete();
        return response(null, 204);
    }
}
