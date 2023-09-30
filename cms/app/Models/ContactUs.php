<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = 'contactus';

    public $timestamps = false; // Disable timestamps

    protected $fillable = [
        'gmaps',
        'alamat',
        'no_telp',
        'email',
        'created_by',
        'created_date',
        'update_at',
        'updated_date'
    ];

    // ... rest of your model code
}
