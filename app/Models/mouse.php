<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mouse extends Model
{
    public $timestamps=false;
    /**
     * @var string $table
     */
    protected $table = 'mouse';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'NamaMouse',
        'MerkMouse',
        'DpiMouse',
        'Color',
        'SensorMouse',
        'TotalButton',
        'Weight',
        'Wireless',
        'RGB',
        'Harga',
        'ImageLink',
        'Links',
    ];
    use HasFactory;
}
