<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutusModel extends Model
{
    protected $table = 'about_us';

    public $timestamps = false; 

    protected $fillable = [
        
        'title',
        'description',
        'created_at',
        'created_date',
        'update_at',
        'update_date'
    ];
}
