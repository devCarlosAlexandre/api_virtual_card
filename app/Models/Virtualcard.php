<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Virtualcard extends Model
{
    protected $fillable = [
        'name', 'link_github', 'link_linkedin'
    ];
}
