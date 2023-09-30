<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManfaatModel extends Model
{
    protected $table = 'manfaat_kerja_sama';

    public $timestamps = false;

    protected $fillable = [

        'deskripsi',
        'create_at',
        'create_date',
        'update_at',
        'update_date'
    ];
}
