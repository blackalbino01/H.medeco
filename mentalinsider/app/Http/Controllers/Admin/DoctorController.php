<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDoctorRequest;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Models\Department;
use App\Models\Doctor;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DoctorController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('doctor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $doctors = Doctor::with(['dept'])->get();

        return view('admin.doctors.index', compact('doctors'));
    }

    public function create()
    {
        abort_if(Gate::denies('doctor_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $depts = Department::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.doctors.create', compact('depts'));
    }

    public function store(StoreDoctorRequest $request)
    {
        $doctor = Doctor::create($request->all());

        return redirect()->route('admin.doctors.index');
    }

    public function edit(Doctor $doctor)
    {
        abort_if(Gate::denies('doctor_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $depts = Department::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $doctor->load('dept');

        return view('admin.doctors.edit', compact('depts', 'doctor'));
    }

    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
        $doctor->update($request->all());

        return redirect()->route('admin.doctors.index');
    }

    public function show(Doctor $doctor)
    {
        abort_if(Gate::denies('doctor_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $doctor->load('dept', 'doctorSchedules', 'doctorAppointments', 'categoryArticles');

        return view('admin.doctors.show', compact('doctor'));
    }

    public function destroy(Doctor $doctor)
    {
        abort_if(Gate::denies('doctor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $doctor->delete();

        return back();
    }

    public function massDestroy(MassDestroyDoctorRequest $request)
    {
        Doctor::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
