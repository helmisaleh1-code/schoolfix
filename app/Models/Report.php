<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'reporter_name',
        'location',
        'damage_type',
        'description',
        'status',
        'report_date',
    ];
}