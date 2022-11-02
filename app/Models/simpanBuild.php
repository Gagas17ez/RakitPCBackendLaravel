<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class simpanBuild extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'simpan_build';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'NamaBuild',
        'IdUser',
        'Compatible',
        'Harga',
        'IdCasing',
        'IdCpu',
        'IdCpuCooler',
        'IdMotherboard',
        'IdPsu',
        'IdRam1',
        'IdRam2',
        'IdStorage1',
        'IdStorage2',
        'IdVga',
        'IdFan1',
        'IdFan2',
        'IdFan3'
    ];

    use HasFactory;
}
