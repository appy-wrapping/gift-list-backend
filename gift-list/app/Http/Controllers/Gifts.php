<?php

namespace App\Http\Controllers;

use App\Models\GiftModel;
use Illuminate\Http\Request;

class Gifts extends Controller
{
    public function index()
    {
        // get all aircraft
        return GiftModel::all();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $gift = GiftModel::create($data);

        return $gift;
    }

    public function destroy(GiftModel $gift)
    {
        $gift->delete();
        return response(null, 204);
    }
}