<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stnkjadi extends Model
{
   
    use HasFactory;
    public $table = 'stnk_jadi';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'business_unit',
        'branch',
        'chasis',
        'model',
        'wilayah',
        'birojasa',
        'tgl_aju',
        'tgl_estimasi_stnk_jadi',
        'tgl_stnkjadi',
        'tgl_bpkbjadi',
        'nopol',
        'plan_delv_stnk',
        'plan_delv_bpkb',
        'payment_method',
        'status_stnk',
    ];
}
