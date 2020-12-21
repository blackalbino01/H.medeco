<?php

namespace App\Http\Requests;

use App\Models\Article;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreArticleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('article_create');
    }

    public function rules()
    {
        return [
            'slug'        => [
                'string',
                'nullable',
            ],
            'title'       => [
                'string',
                'required',
            ],
            'content'     => [
                'required',
            ],
            'date'        => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'time'        => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
            'category_id' => [
                'required',
                'integer',
            ],
        ];
    }
}