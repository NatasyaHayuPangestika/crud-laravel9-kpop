<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodataanggota extends Model
{
    use HasFactory;
        
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_kpop',
        'jk_kpop',
        'dob_kpop',
        'asalgrup_kpop',
    ];
}
