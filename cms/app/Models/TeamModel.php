<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamModel extends Model
{
    protected $table = 'team';

    public $timestamps = false; 

    protected $fillable = [
        'foto',
        'nama',
        'jabatan',
        'pesan',
        'created_at',
        'created_date',
        'update_at',
        'update_date'
    ];

}
