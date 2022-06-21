<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $table='events';

    protected $fillable=['nama','deskripsi','gambar','waktu'];
    public $timestamps = false;
}
