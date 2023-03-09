<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pstnk extends Model
{
    use HasFactory;
    public $table = 'pending_stnk';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cust_name',
        'business_unit',
        'branch',
        'chasis',
        'wilayah',
        'faktur_date',
        'cek_fisik',
        'terima_faktur',
        'terima_berkasafi',
        'lt_faktur',
        'pilnop',
        'keterangan'
        
    ];

}
