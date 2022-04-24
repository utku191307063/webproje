<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ürünler extends Model
{
    use HasFactory;
    protected $table='ürünlers';
    protected $fillable=['ürünadı','fiyat','tür','cinsiyet','malzeme','resim',];
}
