<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $primary = 'Kode_Member';
    protected $table = "Member";
    protected $fillable = [
        'Nama_Lengkap',
        'Alamat',
        'No_Telepon',
        'Status',

    ];
}
