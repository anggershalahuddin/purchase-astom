<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'products';

    protected $fillable = [
        'fk',
        'cust_code',
        'ai_code',
        'cust_name',
        'conversion',
        'stock',
    ];
}
