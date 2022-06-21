<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
    use HasFactory;
    protected $table='cake';

    protected $fillable=['nama','harga','gambar'];
    
    public $timestamps = false;
}
