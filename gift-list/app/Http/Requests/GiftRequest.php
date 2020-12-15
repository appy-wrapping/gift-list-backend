<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GiftRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() // allow anyone to interact with the app
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "item_name" => ["required", "string", "max:80"],
            "price" => ["required", "numeric"],
            // "friend_id" => ["required", "integer"],
        ];
    }
}
