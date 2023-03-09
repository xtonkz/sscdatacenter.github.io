<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pdd extends Model
{
    use HasFactory;
    public $table = 'pdd';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'business_unit',
        'branch',
        'chasis',
        'salesmen',
        'kontak_sales',
        'zona',
        'batch',
        'nama_driver',
        'kontak_driver',
        'plan_out',
        'pdd_cust_name',
        'pdd_address',
        'pdd_lokasi_unit',
        'pdd_stnk',
        'pdd_warna',
        'pdd_model',
        'pdd_acc',
        'pdd_tgl_acc',
        'pdd_asal_unit',
        'pdd_cust_phone',
        'pdd_plan_tiba',
        'pdd_tgl_dr',
        'pdd_plan_deliv',
        'pdd_stnk_deliv',
        'pdd_bpkb_deliv',
        'pdd_destination',
        'pdd_engine',

    ];
    protected $primaryKey = 'pdd_id';
}
