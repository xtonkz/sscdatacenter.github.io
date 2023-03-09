<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hs extends Model
{
    use HasFactory;
    
    public $table = 'stock';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'plant',
        'bpkb_name',
        'chasis',
        'cust_name',
        'stnk_jadi',
        'bpkb_no',
        'leasing',
        'engine_no',
        'type_unit',
        'nopol',
        'bpkb_input',
        'aging_bpkb_blmgr',
        'business_unit',
        'sistem',
        'tgl_keluar_bpkb',
        'pengambil_bpkb',
        'top',
        'tahun_input_bpkb',
        'penerima',
        'bpkb_revisi',
        'selesai_revisi',
        'keterangan',
        'status',

    ];
}
