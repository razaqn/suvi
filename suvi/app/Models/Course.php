<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';

    protected $fillable = ['name', 'desc', 'image', 'bg_image','video', 'mentor_id', 'type_id', 'categories_id'];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function courseRatings()
    {
        return $this->hasMany(CourseRating::class);
    }
}
