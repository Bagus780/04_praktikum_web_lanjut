<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    use HasFactory;
    protected $table = 'profiles';
    protected $primaryKey = 'nim';
    protected $keyType = 'string';
}