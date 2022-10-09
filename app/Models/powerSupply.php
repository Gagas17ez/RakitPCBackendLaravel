<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class powerSupply extends Model
{
    public $timestamps=false;
    /**
     * @var string $table
     */
    protected $table = 'power_supply';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'NamaPSU',
        'MerkPSU',
        'WattPSU',
        '80PlusEfficient',
        'FormFactor',
        'Modular',
        'SataConnector',
        'PCIEConnector',
        'SilentMode',
        'FanSize',
        'ATXConnector',
        'ColorPsu',
        'RGB',
        'Harga',
        'ImageLink',
        'Links',
    ];

    use HasFactory;
}
