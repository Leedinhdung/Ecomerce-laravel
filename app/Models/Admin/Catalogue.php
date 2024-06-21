<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'parent_id',
        'description',
        'is_active'
    ];
    protected $casts=[
        'is_active'=>'boolean'
    ];
}
