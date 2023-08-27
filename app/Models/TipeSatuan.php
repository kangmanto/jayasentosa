<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeSatuan extends Model
{
    use HasFactory;

    protected $table = 'tipe_satuan';
    protected $primaryKey = 'id';
    protected $guarded = [];
}

