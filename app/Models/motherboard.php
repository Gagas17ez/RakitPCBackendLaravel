<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motherboard extends Model
{
    public $timestamps=false;
    /**
     * @var string $table
     */
    protected $table = 'motherboard';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'NamaMobo',
        'MerkMobo',
        'FormFactor',
        'SocketMobo',
        'ChipsetMobo',
        'MemoryType',
        'SlotMemory',
        'SataSlot',
        'PCIE',
        'PCIgen',
        'M2Slot',
        'UsbPort',
        'AudioPort',
        'DisplayOutput',
        'LanPort',
        'ImageLink',
        'Warna',
        'RGB',
        'Harga',    
        'Links',
    ];

    use HasFactory;
}
