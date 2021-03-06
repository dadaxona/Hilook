<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $fillable = ['name','son','dona','summa', 'summa2', 'kod','jami','sotjami'];
    public $timestamps = true;
}