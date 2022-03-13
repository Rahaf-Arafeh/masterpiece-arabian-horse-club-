<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment_desc'
        
    ]; 
    public function courses()
    {
        return $this->belongsTo(Course::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
