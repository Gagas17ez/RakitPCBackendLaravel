<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monitor extends Model
{
    public $timestamps=false;
    /**
     * @var string $table
     */
    protected $table = 'monitor';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'NamaMonitor',
        'MerkMonitor',
        'MonitorResolusi',
        'MonitorRefreshRate',
        'MonitorAspectRatio',
        'MonitorPort',
        'MonitorSize',
        'ScreenTechnology',
        'Harga',
        'ImageLink',
        'Links',
    ];
    use HasFactory;
}
