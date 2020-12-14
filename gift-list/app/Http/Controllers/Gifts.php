<?php

namespace App\Http\Controllers;

use App\Models\GiftModel;
use Illuminate\Http\Request;
use App\Http\Requests\GiftRequest;

class Gifts extends Controller
{
    public function index()
    {
        return GiftModel::all();
    }

    public function store(GiftRequest $request)
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

    public function update(GiftRequest $request, GiftModel $gift)
    {
        $data = $request->all();
        $gift->fill($data)->save();
        return $gift;
    }
}
