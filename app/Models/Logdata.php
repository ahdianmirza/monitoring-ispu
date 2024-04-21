<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logdata extends Model
{
    use HasFactory;

    protected $table = 'logdatas';
    protected $primaryKey = 'idMonitoring';
    public $timestamps = false;

    protected $fillable = [
        'idMonitoring',
        'waktu',
        'namadevice',
        'co2',
        'no',
        'pm25',
    ];
}
