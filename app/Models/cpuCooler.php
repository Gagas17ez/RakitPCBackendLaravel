<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cpuCooler extends Model
{
    public $timestamps=false;
    /**
     * @var string $table
     */
    protected $table = 'cpu_cooler';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'NamaCooler',
        'MerkCooler',
        'TypeCooler',
        'SocketCooler',
        'DimensionCooler',
        'FanQuantity',
        'FanSpeed',
        'PowerCooler',
        'ColorCooler',
        'RGB',
        'Harga',
        'ImageLink',
        'Links',
    ];

    use HasFactory;
}
