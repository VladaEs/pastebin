<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paste extends Model
{
    use HasFactory;


    protected $table = 'pastes';
    protected $fillable = [
        "filename",
        'author_id',
    ];
}
