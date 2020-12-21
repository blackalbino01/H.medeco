<?php

namespace App\Http\Requests;

use App\Models\Appointment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAppointmentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('appointment_create');
    }

    public function rules()
    {
        return [
            'name'   => [
                'string',
                'required',
            ],
            'phone'  => [
                'string',
                'nullable',
            ],
            'email'  => [
                'required',
            ],
            'status' => [
                'required',
            ],
        ];
    }
}