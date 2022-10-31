<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forumPost extends Model
{
    protected $table = 'forum_post';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'JudulPost',
        'IsiPost',
        'IdPengepost',
        'NamaPengepost',
        'img_path',
        'Like'
    ];

    use HasFactory;
}
