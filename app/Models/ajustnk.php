<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ajustnk extends Model
{
    use HasFactory;
    public $table = 'ajustnk';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'aju_cust_type',
        'aju_fullname',
        'aju_nik',
        'aju_corp_name',
        'aju_phone',
        'aju_address',
        'aju_email',
        'aju_chasis',
        'aju_type',
        'aju_engine',
        'aju_production',
        'aju_gage',
        'aju_sj',
        'aju_spood',
        'aju_upload_ktp',
        'aju_npwp_person',
        'aju_kk',
        'aju_nib',
        'aju_izin_lokasi',
        'aju_izin_usaha',
        'aju_npwp_corp',
       

    ];
    protected $primaryKey = 'aju_id';
}
