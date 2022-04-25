<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;
    protected $table = 'warga';

    //protected $fillable = []; //data yg boleh diisi daat disimpan di arraynya
    protected $guarded = []; //data yang tidak boleh diisi dapat disimpan di arraynya
}
