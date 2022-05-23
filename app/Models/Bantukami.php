<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bantukami extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [
        'bencana', 
        'provinsi', 
        'kota', 
        'kecamatan', 
        'kelurahan', 
        'foto', 
        'deskripsi', 
        'user_id', 
        'tanggal', 
        'is_approval'   
    ];

    protected $hidden = ["deleted_at"];
}
