<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_name',
        'course_desc',
        'course_trainer',
        'course_price',
        'course_period',
        'course_date',
        'img'
    ]; 

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
