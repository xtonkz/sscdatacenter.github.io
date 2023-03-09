<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;
    public $table = 'invoice';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'birojasa',
        'inv_no',
        'chasis',
        'cust_name',
        'business_unit',
        'branch',
        'wilayah',
        'nopol',
        'tgl_notice',
        'tgl_invoice',
        'tgl_bayar',
        
    ];

}
