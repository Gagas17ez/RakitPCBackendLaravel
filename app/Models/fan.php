<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fan extends Model
{
    public $timestamps=false;
    /**
     * @var string $table
     */
    protected $table = 'fan';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'NamaFans',
        'MerkFans',
        'SizeFans',
        'VoltageFans',
        'PowerFans',
        'SpeedFans',
        'ColorFans',
        'RGB',
        'Harga',
        'ImageLinks',
        'PowerConnector',
        'Links',
    ];

    use HasFactory;
}
