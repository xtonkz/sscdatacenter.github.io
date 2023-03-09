<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mstnk extends Model
{
    use HasFactory;
    public $table = 'mohon_stnk';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cust_name',
        'business_unit',
        'branch',
        'birojasa',
        'chasis',
        'wilayah',
        'efektif_faktur',
        'cek_fisik',
        'terima_faktur',
        'berkas_cust',
        'tgl_mohon',
        'est_stnkjadi',
        'tgl_notice',
        'nopol',
        'pilnop',
        'keterangan' 
    ];
}