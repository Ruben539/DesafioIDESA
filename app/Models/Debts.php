<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debts extends Model
{
    use HasFactory;

    protected $fillable =[
        'lote',
        'precio',
        'clientID',
        'vencimiento',
    ];
}
