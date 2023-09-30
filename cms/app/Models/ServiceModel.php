<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model
{
    protected $table = 'service';

    public $timestamps = false; 

    protected $fillable = [
        'title',
        'description',
        'create_at',
        'create_date',
        'update_at',
        'update_date'
    ];
}
