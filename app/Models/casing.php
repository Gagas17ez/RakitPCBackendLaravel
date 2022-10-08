<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class casing extends Model
{
    public $timestamps=false;
    /**
     * @var string $table
     */
    protected $table = 'casing';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'NamaCasing',
        'MerkCasing',
        'MoboCompatible',
        'DrivebayCasing',
        'FanSupport',
        'FrontPanel',
        'DimensionCasing',
        'WeightCasing',
        'ColorCasing',
        'MaxVgaLength',
        'MaxCoolerHeight',
        'MaxPSU',
        'CasingSidePanel',
        'Harga',
        'ImageLink',
        'Links',
    ];

    use HasFactory;
}
