<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sepet extends Model
{
    use HasFactory;
    protected $table='sepet';
    protected $fillable=['ürünadid','kullanıcıid',];
}
