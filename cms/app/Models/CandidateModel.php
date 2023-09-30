<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateModel extends Model
{
    protected $table = 'candidate';

    public $timestamps = false; // Disable timestamps

    protected $fillable = [
        'nama_loker',
        'nama_lengkap',
        'tgl_lahir',
        'alamat',
        'email',
        'no_telp',
        'jenis_kelamin',
        'pendidikan',
        'status_pernikahan',
        'document',
        'created_by',
        'created_date',
        'update_at',
        'updated_date'
    ];
}
