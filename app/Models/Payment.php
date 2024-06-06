<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = "payment";
    protected $fillable = [
        'tanggal',
        'number_whatsapp',
        'customer'
    ];
    use HasFactory;
}
