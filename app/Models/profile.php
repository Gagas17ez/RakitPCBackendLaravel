<?php

namespace App\Models;
use DateTimeInterface;
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

    protected function serializeDate(DateTimeInterface $date){
        return $date->format('Y-m-d H:i:s');
    }

    use HasFactory;
}
