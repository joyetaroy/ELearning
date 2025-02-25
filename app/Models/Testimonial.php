<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $table = "testimonial";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
        'name',  
        'job', 
        'review',
        'description',
        'image',       
    ];
}
