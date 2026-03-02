<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact_tabel';

    protected $fillable = [
        'name',
        'email',
        'subject',
        'description',
        'number'
    ];
}
