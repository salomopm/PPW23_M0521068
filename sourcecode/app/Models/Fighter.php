<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fighter extends Model
{
    use HasFactory;

    protected $table = 't_fighter';

    protected $fillable = [
        'name',
        'age',
        'basic',
        'weightClass',
        
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
}

