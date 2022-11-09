<?php

namespace App\Models;
use DateTimeInterface;
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
        'TipePost',
        'IsiPost',
        'IdPengepost',
        'NamaPengepost',
        'img_path',
        'Like'
    ];

    protected function serializeDate(DateTimeInterface $date){
        return $date->format('Y-m-d H:i:s');
    }

    use HasFactory;
}
