<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keyboard extends Model
{
    public $timestamps=false;
    /**
     * @var string $table
     */
    protected $table = 'keyboard';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'NamaKeyboard',
        'MerkKeyboard',
        'Mechanical',
        'SwitchType',
        'KeyboardType',
        'Wireless',
        'RGB',
        'KeyboardColor',
        'Harga',
        'ImageLink',
        'Links',
    ];
    use HasFactory;
}
