<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;


    protected $fillable = [
        'name',
        'content',
        'adrres',
        'URL',
        'image_url',
        'user_id'
        ];
    use HasFactory;
}
