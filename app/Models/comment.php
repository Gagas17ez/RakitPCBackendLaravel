<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = 'comment';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'IdComment',
        'IdPostComment',
        'IdPengcomment',
        'NamaPengcomment',
        'IsiComment',
        'Like'
    ];

    use HasFactory;
}
