<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cpu extends Model
{
    public $timestamps=false;
    /**
     * @var string $table
     */
    protected $table = 'cpu';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'NamaCpu',
        'MerkCpu',
        'Socket',
        'CoreCount',
        'ThreadsCount',
        'BaseClock',
        'DefaultTDP',
        'LaunchDate',
        'Cache',
        'MaxClock',
        'Unlocked',
        'MaxTemp',
        'ProcTechnology',
        'Harga',
        'ImageLink',
        'Links',
    ];

    use HasFactory;
}
