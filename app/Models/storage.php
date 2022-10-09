<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class storage extends Model
{
    public $timestamps=false;
    /**
     * @var string $table
     */
    protected $table = 'storage';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'NamaStorage',
        'MerkStorage',
        'TypeStorage',
        'FormFactor',
        'StorageCapacity',
        'StorageInterface',
        'Cache',
        'ReadSpeed',
        'WriteSpeed',
        'RPM',
        'StorageWatt',
        'Harga',
        'ImageLink',
        'Links',
    ];

    use HasFactory;
}
