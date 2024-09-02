<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $table = 'students';

    // Add fillable when sorting submit
    // protected $fillable = ['name', 'email', 'birthdate', 'enrollment_date'];
}
