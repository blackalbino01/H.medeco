<?php

namespace App\Http\Requests;

use App\Models\Schedule;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreScheduleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('schedule_create');
    }

    public function rules()
    {
        return [
            'date'  => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'day'   => [
                'string',
                'required',
            ],
            'start' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
            'end'   => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
        ];
    }
}