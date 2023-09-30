<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    protected $table = 'blog';

    public $timestamps = false; 

    protected $fillable = [
        'image',
        'judul',
        'deskripsi',
        'create_at',
        'created_date',
        'update_at',
        'update_date'
    ];

}
