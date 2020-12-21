@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.schedule.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.schedules.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="doctor_id">{{ trans('cruds.schedule.fields.doctor') }}</label>
                <select class="form-control select2 {{ $errors->has('doctor') ? 'is-invalid' : '' }}" name="doctor_id" id="doctor_id">
                    @foreach($doctors as $id => $doctor)
                        <option value="{{ $id }}" {{ old('doctor_id') == $id ? 'selected' : '' }}>{{ $doctor }}</option>
                    @endforeach
                </select>
                @if($errors->has('doctor'))
                    <span class="text-danger">{{ $errors->first('doctor') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.schedule.fields.doctor_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="date">{{ trans('cruds.schedule.fields.date') }}</label>
                <input class="form-control date {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text" name="date" id="date" value="{{ old('date') }}" required>
                @if($errors->has('date'))
                    <span class="text-danger">{{ $errors->first('date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.schedule.fields.date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="day">{{ trans('cruds.schedule.fields.day') }}</label>
                <input class="form-control {{ $errors->has('day') ? 'is-invalid' : '' }}" type="text" name="day" id="day" value="{{ old('day', '') }}" required>
                @if($errors->has('day'))
                    <span class="text-danger">{{ $errors->first('day') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.schedule.fields.day_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="start">{{ trans('cruds.schedule.fields.start') }}</label>
                <input class="form-control timepicker {{ $errors->has('start') ? 'is-invalid' : '' }}" type="text" name="start" id="start" value="{{ old('start') }}">
                @if($errors->has('start'))
                    <span class="text-danger">{{ $errors->first('start') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.schedule.fields.start_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="end">{{ trans('cruds.schedule.fields.end') }}</label>
                <input class="form-control timepicker {{ $errors->has('end') ? 'is-invalid' : '' }}" type="text" name="end" id="end" value="{{ old('end') }}">
                @if($errors->has('end'))
                    <span class="text-danger">{{ $errors->first('end') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.schedule.fields.end_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection