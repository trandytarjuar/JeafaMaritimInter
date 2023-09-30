<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobModel extends Model
{
    protected $table = 'loker';

    public $timestamps = false; // Disable timestamps

    protected $fillable = [
        'title',
        'gaji',
        'benefit',
        'kualifikasi',
        'create_at',
        'created_date',
        'update_at',
        'update_date'
    ];
}
