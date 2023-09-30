<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeModel extends Model
{
    protected $table = 'home';

    public $timestamps = false; // Disable timestamps

    protected $fillable = [
        'title',
        'tagline',
        'banner1',
        'banner2',
        'created_at',
        'created_date',
        'update_at',
        'update_date'
    ];
}
