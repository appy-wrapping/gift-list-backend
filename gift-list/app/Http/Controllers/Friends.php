<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Http\Requests\API\FriendRequest;
use App\Http\Resources\API\FriendsResource;

class Friends extends Controller
{
    public function index() // show all friends
    {
        return FriendsResource::collection(Friend::all());
    }

    public function store(FriendRequest $request) // add new friend
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

    public function show(Friend $friend) // return individual friend
    {
        return new FriendsResource($friend);
    }

    public function update(FriendRequest $request, Friend $friend) //update friend
    {
        $data = $request->all();
        $friend->fill($data)->save();
        return $friend;
    }
}
