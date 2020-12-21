@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.schedule.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.schedules.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.id') }}
                        </th>
                        <td>
                            {{ $schedule->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.doctor') }}
                        </th>
                        <td>
                            {{ $schedule->doctor->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.date') }}
                        </th>
                        <td>
                            {{ $schedule->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.day') }}
                        </th>
                        <td>
                            {{ $schedule->day }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.start') }}
                        </th>
                        <td>
                            {{ $schedule->start }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.end') }}
                        </th>
                        <td>
                            {{ $schedule->end }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.schedules.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
