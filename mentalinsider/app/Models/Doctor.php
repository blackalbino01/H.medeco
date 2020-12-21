<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Doctor extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'doctors';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'phone',
        'email',
        'department',
        'dept_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function doctorSchedules()
    {
        return $this->hasMany(Schedule::class, 'doctor_id', 'id');
    }

    public function doctorAppointments()
    {
        return $this->hasMany(Appointment::class, 'doctor_id', 'id');
    }

    public function categoryArticles()
    {
        return $this->hasMany(Article::class, 'category_id', 'id');
    }

    public function dept()
    {
        return $this->belongsTo(Department::class, 'dept_id');
    }
}
