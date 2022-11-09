<?php

namespace App\Models;
use DateTimeInterface;
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

    protected function serializeDate(DateTimeInterface $date){
        return $date->format('Y-m-d H:i:s');
    }

    use HasFactory;
}
