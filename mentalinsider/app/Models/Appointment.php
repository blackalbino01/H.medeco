<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Appointment extends Model
{
    use SoftDeletes, HasFactory;


    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const STATUS_SELECT = [
        'pending'   => 'Pending',
        'confirmed' => 'Confirmed',
        'rejected'  => 'Rejected',
    ];

    protected $fillable = [
        'name',
        'phone',
        'email',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}