<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_category extends Model
{
    protected $fillable = ['name','icon'];
    use HasFactory;
    

protected $table ='post_category';
}