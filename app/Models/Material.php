<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Material extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'materials';

    protected $fillable = [
        'cust_code',
        'ai_code',
        'cust_name',
        'stock',
    ];


    // public function centroids()
    // {
    //     return $this->hasMany(Centroid::class, 'student_id');
    // }
}
