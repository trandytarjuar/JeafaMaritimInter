<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MisiModel extends Model
{
    protected $table = 'misi';
    public $timestamps = false;
    protected $fillable = [
        'deskripsi',
        'create_at',
        'created_date',
        'update_at',
        'update_date'
    ];
}
