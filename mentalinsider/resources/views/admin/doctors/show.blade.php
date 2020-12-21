@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.doctor.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.doctors.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.doctor.fields.id') }}
                        </th>
                        <td>
                            {{ $doctor->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.doctor.fields.name') }}
                        </th>
                        <td>
                            {{ $doctor->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.doctor.fields.phone') }}
                        </th>
                        <td>
                            {{ $doctor->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.doctor.fields.email') }}
                        </th>
                        <td>
                            {{ $doctor->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.doctor.fields.department') }}
                        </th>
                        <td>
                            {{ $doctor->department }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.doctor.fields.dept') }}
                        </th>
                        <td>
                            {{ $doctor->dept->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.doctors.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#doctor_schedules" role="tab" data-toggle="tab">
                {{ trans('cruds.schedule.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#doctor_appointments" role="tab" data-toggle="tab">
                {{ trans('cruds.appointment.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#category_articles" role="tab" data-toggle="tab">
                {{ trans('cruds.article.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="doctor_schedules">
            @includeIf('admin.doctors.relationships.doctorSchedules', ['schedules' => $doctor->doctorSchedules])
        </div>
        <div class="tab-pane" role="tabpanel" id="doctor_appointments">
            @includeIf('admin.doctors.relationships.doctorAppointments', ['appointments' => $doctor->doctorAppointments])
        </div>
        <div class="tab-pane" role="tabpanel" id="category_articles">
            @includeIf('admin.doctors.relationships.categoryArticles', ['articles' => $doctor->categoryArticles])
        </div>
    </div>
</div>

@endsection
