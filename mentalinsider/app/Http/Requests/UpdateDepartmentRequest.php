<?php

namespace App\Http\Requests;

uuse App\Models\Department;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDepartmentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('department_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
        ];
    }