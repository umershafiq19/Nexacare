<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
   protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'blood_group',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'zip_code',
        'country',
        'user_id',
   ];

}
