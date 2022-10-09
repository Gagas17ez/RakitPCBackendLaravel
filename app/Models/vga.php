<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vga extends Model
{
    public $timestamps=false;
    /**
     * @var string $table
     */
    protected $table = 'vga';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'NamaVGA',
        'ReleaseDate',
        'MerkVGA',
        'Generation',
        'Interface',
        'BaseClocks',
        'BoostClock',
        'MemoryClock',
        'MemoryVGA',
        'MemoryType',
        'MemoryBus',
        'OutputPort',
        'PowerConsumption',
        'PowerConnection',
        'DimensionVGA',
        'Architecture',
        'MaxDisplay',
        'RGB',
        'RTcores',
        'Color',
        'ImageLink',
        'Harga',
        'GraphicAPI',
        'DisplayTechnology',
        'Links',
    ];

    use HasFactory;
}
