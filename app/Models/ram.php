<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ram extends Model
{
    public $timestamps=false;
    /**
     * @var string $table
     */
    protected $table = 'ram';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'NamaRam',
        'MerkRam',
        'MemoryType',
        'MemorySize',
        'MemorySpeed',
        'LatencyCL',
        'Voltage',
        'HeatSpreader',
        'Color',
        'RGB',
        'Harga',
        'ImageLink',
        'Links',
    ];

    use HasFactory;
}
