<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name_category',
        'description_category',
        'image_category',
        'status_category',
        'parent_id',
        'category_created_at',
        'category_updated_at',

    ];
    use HasFactory;
}
