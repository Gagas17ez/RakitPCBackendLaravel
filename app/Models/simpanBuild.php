<?php

namespace App\Models;
use DateTimeInterface;
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
        'HargaTotal',
        'IdCasing',
        'HargaCasing',
        'IdCpu',
        'HargaCpu',
        'IdCpuCooler',
        'HargaCpuCooler',
        'IdMotherboard',
        'HargaMotherboard',
        'IdPsu',
        'HargaPsu',
        'IdRam1',
        'HargaRam1',
        'IdRam2',
        'HargaRam2',
        'IdStorage1',
        'HargaStorage1',
        'IdStorage2',
        'HargaStorage2',
        'IdVga',
        'HargaVga',
        'IdFan1',
        'HargaFan1',
        'IdFan2',
        'HargaFan2',
        'IdFan3',
        'HargaFan3',
        'created_at',
        'updated_at'
    ];

    protected function serializeDate(DateTimeInterface $date){
        return $date->format('Y-m-d H:i:s');
    }

    use HasFactory;
}
