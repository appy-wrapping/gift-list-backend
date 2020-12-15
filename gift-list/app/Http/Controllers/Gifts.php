<?php

namespace App\Http\Controllers;

use App\Models\GiftModel;
use App\Http\Requests\GiftRequest;
use App\Models\Friend;
use App\Http\Resources\API\GiftListResource;

class Gifts extends Controller
{
    public function index(Friend $friend) // return gifts belonging to a specific friend
    {
        // return $friend->gifts;
        return GiftListResource::collection($friend->gifts);
    }

    public function indexAll() // return all gifts, using GiftListResource to format the data as we want it
    {
        return GiftListResource::collection(GiftModel::all());
    }

    public function store(GiftRequest $request, Friend $friend)  // save new gift
    {
        $data = $request->only([
            'item_name',
            'price'
        ]);
        
        $gift = new GiftModel($data);
        $gift->friend()->associate($friend);
        $gift->save();

        return $gift;
    }

    public function destroy(GiftModel $gift) // delete gift
    {
        $gift->delete();
        return response(null, 204);
    }

    public function update(GiftRequest $request, GiftModel $gift) //update gift
    {
        $data = $request->all();
        $gift->fill($data)->save();
        return $gift;
    }
}

// public function store(Request $request, Owner $owner)
// {
//     $animal_data = $request->only(['name',
//     'type',
//     'dob',
//     'mass',
//     'height',
//     'biteyness'
//     ]);

//     $animal = new Animal($animal_data);
//     $animal->owner()->associate($owner);
//     $animal->save();
        
//     return $animal;
// }
