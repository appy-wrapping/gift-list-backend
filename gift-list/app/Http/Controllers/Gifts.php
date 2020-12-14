<?php

namespace App\Http\Controllers;

use App\Models\GiftModel;
use Illuminate\Http\Request;

class Gifts extends Controller
{
    public function index()
    {
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

    public function update(Request $request, GiftModel $gift)
    {
        $data = $request->all();
        $gift->fill($data)->save();
        return $gift;
    }
}
