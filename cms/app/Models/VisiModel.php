<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiModel extends Model
{
    protected $table = 'visi';
    public $timestamps = false;
    protected $fillable = [
        'deskripsi',
        'created_by',
        'created_date',
        'update_at',
        'update_date'
    ];
}
