<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class builds extends Model
{
    public $timestamps=false;
    /**
     * @var string $table
     */
    protected $table = 'builds';

    /**
     * @var array $fillable
     */

    use HasFactory;
}
