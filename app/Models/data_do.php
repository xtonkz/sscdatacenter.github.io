<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_do extends Model
{
    use HasFactory;
    
    public $table = 'data_do';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'business_unit',
        'branch',
        'do_no',
        'do_date',
        'chasis',
        'model',
        'tipe_kendaraan',
        'product_desc',
        'color_desc',
        'engine_no',
        'cust_name',
        'stnk_name',
        'cust_address',
        'cust_dist',
        'cust_city',
        'payment_method',
        ];

        // protected $dates = [
        //     'do_date',
        // ];
}
