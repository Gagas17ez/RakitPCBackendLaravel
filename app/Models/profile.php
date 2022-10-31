<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'profile';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'IdUser',
        'NamaUser',
        'TipeUser',
        'ProfilePic',
        'Kelamin',
        'TglLahir'
    ];

    use HasFactory;
}
