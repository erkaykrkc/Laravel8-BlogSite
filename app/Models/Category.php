<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class Category extends Model
{  
    use HasFactory;

    protected $appends=[
        'parent',
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    /* One to Many Iverse - Tersi */ 
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }

    public function  children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
